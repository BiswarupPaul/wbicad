<?php

/*

 * Schemes List Banner Layout

 */

$get_post = $Common->get_post(EVENTS);
$ecategory  = $Common->get_post(ECATEGORY);
?>



<div class="row align-items-center">

    <div class="col-md-9">

        <div class="page-header">

            <h3>All Events </h3>

        </div>

    </div>

    <div class="col-md-3">

        <a href="layout.php?p=events-add-events" class="btn btn-primary float-end"><i class="fa-solid fa-plus me-1"></i>Add New</a>

    </div>

</div>



<div class="whitebox mt-3">

    <table id="example" class="table table-striped nowrap" style="width:100%">

        <thead>

            <tr>

                <th>Sl No</th>

               

                <th>Title</th>

                <th>Event Category</th>

                <th>Sorting No</th>

                <th>Published Date</th>

                <th>Status</th>

                <th>Action</th>

            </tr>

        </thead>

        <tbody id="post_list" class="row_position">

            <?php

            $i = 1;

            foreach ($get_post as $post):

                ?>

                <tr id="<?php echo $post['ID'] ?>" data-post-id="<?php echo $post['ID'] ?>">

                    <td><?php echo $i; ?>.</td>

                     <td><?php echo $post['title']; ?></td>

                     <td>

                        <?php

                        //$ecategory = $Common->get_post(ECATEGORY, $post['event_id'])[0];

                       // echo $ecategory['event_category'];

                        ?>

                    </td>
                    <td><?php echo $post['post_order_no']; ?></td>
                    <td><?php echo $post['created_date']; ?></td>

                    <td><?php echo $post['status'] == 1 ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Deactive</span>'; ?></td>

                    <td>

                        <a href="layout.php?p=events-add-events&page=edit&id=<?php echo $post['ID']; ?>" class="link-primary">

                            <i class="fa-regular fa-pen-to-square"></i>

                        </a>

                        <a href="javascript:void(0);" data-table="<?php echo EVENTS; ?>" data-id="<?php echo $post['ID']; ?>" onclick="deletePost(this);" class="link-danger">

                            <i class="fa-solid fa-trash-can"></i>

                        </a>

                    </td>

                </tr>

                <?php

                $i++;

            endforeach;

            ?>

        </tbody>

    </table>

</div>



<script type="text/javascript">

    function deletePost(e) {

        jQuery.ajax({

            data: {action: 'delete_post', table_name: jQuery(e).data('table'), id: jQuery(e).data('id'), redirect: location.href},

            type: 'post',

            dataType: 'json',

            url: '<?php echo AJAX_URL; ?>',

            success: function (res) {

                //console.log(res);

                if (res.status == 'success') {

                    location.href = res.redirect;

                }

            }

        });

        return false;

    }

</script>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    console.log('jQuery loaded:', typeof jQuery !== 'undefined');
    console.log('jQuery UI loaded:', typeof $.ui !== 'undefined');

    $("#post_list").sortable({
        placeholder: "ui-state-highlight",
        update: function(event, ui) {
            var post_data = [];
            $('#post_list tr').each(function(index) {
                var post_id = $(this).data("post-id");
                var title = $(this).find('td').eq(1).text().trim();  // Get the title from the table row
                var event_id = $(this).find('td').eq(2).text().trim();  // Get the event category
                var created_date = $(this).find('td').eq(4).text().trim();  // Get the published date
                var status = $(this).find('td').eq(5).find('span').text().trim();  // Get the status (Active/Deactive)

                post_data.push({
                    id: post_id,
                    title: title,
                    event_id: event_id,
                    created_date: created_date,
                    status: status,
                    order: index + 1  // New sorting order (starting from 1)
                });

                // Update Sorting Number in the UI
                $(this).find('td').eq(3).text(index + 1);  // Update Sorting No field in the UI
            });

            // Debugging: Log the post_data before sending the AJAX request
            console.log("Post Data to send:", post_data);

            $.ajax({
                url: "http://localhost/wbicad/wb-admin/ajax/update_fn.php", // URL of the server-side script
                type: 'POST',
                data: { post_data: post_data },
                success: function(response) {
                    console.log("AJAX Response:", response); // Log the response from the server
                    if (response.success) {
                        // location.reload();  // Refresh the page to reflect the changes
                        $(".alert-success").hide();
                        $(".alert-danger").show().text(response.message);
                    } else {
                        $(".alert-success").hide();
                        $(".alert-danger").show().text(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error: ", status, error);
                    $(".alert-success").hide();
                    $(".alert-danger").show().text("An error occurred while saving the order.");
                }
            });
        }
    });
});



</script>