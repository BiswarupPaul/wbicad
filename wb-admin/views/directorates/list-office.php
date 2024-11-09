<?php
/*
 * Home List Banner Layout
 */
$get_post = $Common->get_post(OFFICES);
?>

<div class="row align-items-center">
    <div class="col-md-9">
        <div class="page-header">
            <h3>All Offices </h3>
        </div>
    </div>
    <div class="col-md-3">
        <a href="layout.php?p=directorates-add-office" class="btn btn-primary float-end"><i class="fa-solid fa-plus me-1"></i>Add New</a>
    </div>
</div>

<div class="whitebox mt-3">
    <table id="example" class="table table-striped nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Sl No</th>
                <th>Office Name</th>
                <th>Officers Name</th>
                <th>Designation</th>
                <th>Directorate</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($get_post as $post):
                ?>
                <tr>
                    <td><?php echo $i; ?>.</td>
                    <td><?php echo $post['office_name']; ?></td>
                    <td><?php echo $post['officers_name']; ?></td>
                    <td><?php echo $post['designation']; ?></td>
                    <td>
                        <?php
                        $directorates = $Common->get_post(DIRECTORATES, $post['directorate_id'])[0];
                        echo $directorates['title'];
                        ?>
                    </td>
                    <td><?php echo $post['status'] == 1 ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Deactive</span>'; ?></td>
                    <td>
                        <a href="layout.php?p=directorates-add-office&page=edit&id=<?php echo $post['ID']; ?>" class="link-primary">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                        <a href="javascript:void(0);" data-table="<?php echo OFFICES; ?>" data-id="<?php echo $post['ID']; ?>" onclick="deletePost(this);" class="link-danger">
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