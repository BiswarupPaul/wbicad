<?php
ob_start();
/*

 * Home Add Banner Layout

 */



if (isset($_REQUEST['page']) && $_REQUEST['page'] == 'edit') {

    $reqId = $_REQUEST['id'];

    $get_post = $Common->get_post(TENDERS, $reqId)[0];

    $get_post_meta = isset($get_post['metadata']) ? json_decode($get_post['metadata'], true) : [];


}

?>



<div class="row align-items-center g-2 mb-3">

    <div class="col-md-9">

        <div class="page-header">

            <h3>Add New </h3>

        </div>

    </div>



    <div class="col-md-3">

        <a href="layout.php?p=tenders-list-tenders" class="btn btn-primary float-end">

            <i class="fa-solid fa-plus me-1"></i>All Tenders

        </a>

    </div>



</div>



<form method="post" id="postForm" enctype="multipart/form-data">

    <div class="item_name">

        <div class="whitebox mb-4">

            <label>Department</label>

            <input type="text" class="form-control paste-disabled" name="post[department]" id="post[department]" value="<?php echo isset($get_post['department']) ? $get_post['department'] : ''; ?>">

            <label>Description</label>

            <input type="text" class="form-control paste-disabled" name="post[description]" id="post[description]" value="<?php echo isset($get_post['description']) ? $get_post['description'] : ''; ?>">

            <label>Date Of Issue</label>

            <input type="text" class="form-control datepicker paste-disabled" name="post[date_of_issue]" id="post[date_of_issue]" value="<?php echo isset($get_post['date_of_issue']) ? $get_post['date_of_issue'] : ''; ?>">

            <label>Last Date Of Reciept</label>

            <input type="text" class="form-control datepicker paste-disabled" name="post[last_date_of_receipt]" id="post[last_date_of_receipt]" value="<?php echo isset($get_post['last_date_of_receipt']) ? $get_post['last_date_of_receipt'] : ''; ?>">

            <label>Document Link</label>

            <input type="text" class="form-control paste-disabled" name="post[link]" id="post[link]" value="<?php echo isset($get_post['link']) ? $get_post['link'] : ''; ?>">

            <div class="row">

                <div class="col-md-8 mb-3">

                    <label for="formFile" class="form-label">Upload PDF</label>

                    <input class="form-control" type="file" id="documents" name="documents" accept=".pdf">

                </div>

            </div>



        </div>

    </div>



    <div class="publish-row">

        <div class="row align-items-center justify-align-center">

            <div class="col-md-5">

                <i class="fa-solid fa-calendar-days me-2"></i>

                <?php echo CURR_DATE; ?>

            </div>

            <div class="col-md-3">

                <div class="switch-field">

                    <input type="radio" id="radio-one" name="post[status]" value="1" <?php echo isset($get_post['status']) && $get_post['status'] == 1 ? 'checked' : ''; ?> />

                    <label for="radio-one">ON</label>

                    <input type="radio" id="radio-two" name="post[status]" value="0" <?php echo isset($get_post['status']) && $get_post['status'] == 0 ? 'checked' : ''; ?> />

                    <label for="radio-two">OFF</label>

                </div>

            </div>

            <div class="col-md-4 text-end">

                <input type="hidden" name="action" value="add_update_tender" />

                <input type="hidden" name="page" value="<?php echo isset($_REQUEST['page']) ? $_REQUEST['page'] : 'add'; ?>" />

                <input type="hidden" name="page_id" value="<?php echo isset($_REQUEST['id']) ? $_REQUEST['id'] : ''; ?>" />

                <input type="hidden" name="redirect" value="layout.php?p=tenders-list-tenders" />

                <input type="submit" class="btn btn-outline-light btn-sm" value="Save"> 

            </div>

        </div>

    </div>

</form>

<script type="text/javascript">

     jQuery(document).ready(function () {
        jQuery(".paste-disabled input, .paste-disabled textarea").attr("autocomplete", "off");
        jQuery(".paste-disabled").attr("onpaste", "return false");
        
        jQuery("#postForm").validate({
            rules: {
                'post[title]': {
                    required: true,
                    noUrlsOrScripts: true,
                    contains: ["test", "test test", "Test"]
                },
//                'documents': {
//                    required: true
//                },
                'post[status]': {
                    required: true
                }
            },
            messages: {
            'post[title]': {
                required: "Please fill the field.",
              
            },
        
            
        },
            errorClass: "text-danger",
            errorElement: "p",
            errorPlacement: function (error, element) {
                var sel = jQuery(element).attr('name');
                jQuery('#' + sel + '-error').remove();
                error.insertAfter(element);
            },
            highlight: function (element, errorClass, validClass) {
                jQuery(element).addClass("is-invalid").removeClass("is-valid");
                jQuery(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function (element, errorClass, validClass) {
                jQuery(element).addClass("is-valid").removeClass("is-invalid");
                jQuery(element).addClass("is-valid").removeClass("is-invalid");
            },
            submitHandler: function (form) {
                var formdata = new FormData(jQuery("#postForm"));
                jQuery.ajax({
                    data: formdata,
                    type: 'post',
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    url: '<?php echo AJAX_URL; ?>',
                    success: function (res) {
                        //console.log(res);
//                        if (res.status == 'success') {
//                            location.href = res.redirect;
//                        }
                    }
                });
                return false;
            }
        });
        jQuery.validator.addMethod("lettersonly", function (value, element) {
            return this.optional(element) || /^[a-z," "]+$/i.test(value);
        }, "Letters and spaces only please");
        jQuery.validator.addMethod("contains", function (value, element, param) {
            if (this.optional(element)) {
                return true;
            }
            for (i = 0; i < param.length; i++) {
                if (value.includes(param[i])) {
                    return false;
                }
            }
            return true;
        }, "Please enter valid value.");
        jQuery.validator.addMethod("noUrlsOrScripts", function (value, element) {
    // Regular expression to check for URLs or scripts
    var urlPattern = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*|<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>|www\.[^\s/$.?#].[^\s]*/gi;
    return !urlPattern.test(value);
}, "URLs and scripts are not allowed.");
    });
</script>
<?php
// End of your PHP logic
ob_end_flush();
?>