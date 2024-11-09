<?php

/*

 * Directorates Page CMS Manage Layout

 */



if (isset($_REQUEST['page']) && $_REQUEST['page'] == 'edit') {

    $reqId = $_REQUEST['id'];

    $get_post = $Common->get_post(OTHEROFFICERS, $reqId)[0];

}

?>



<div class="row align-items-center">

    <div class="col-md-7">

        <div class="page-header">

            <h3>Edit Officers</h3>

        </div>

    </div>

    <div class="col-md-5">

        <a href="layout.php?p=contacts-list-other-officers" class="btn btn-primary float-end">

            <i class="fa-solid fa-plus me-1"></i>All Officers

        </a>

    </div>

</div>



<form method="post" id="cmsForm" enctype="multipart/form-data">

    <div class="item_name">

        <div class="whitebox mb-4">

            <label>Officer Name</label>

            <input type="text" class="form-control paste-disabled" name="post[officer_name]" id="post[officer_name]" value="<?php echo isset($get_post['officer_name']) ? $get_post['officer_name'] : ''; ?>">

            <label>Holding the Post</label>

            <input type="text" class="form-control paste-disabled" name="post[holding_post]" id="post[holding_post]" value="<?php echo isset($get_post['holding_post']) ? $get_post['holding_post'] : ''; ?>">

        </div>

    </div>



    <div class="publish-row">

        <div class="row align-items-center justify-align-center">

            <div class="col-md-8">

                <i class="fa-solid fa-calendar-days me-2"></i>

                <?php echo CURR_DATE; ?>

            </div>

            <div class="col-md-4">

                <input type="hidden" name="action" value="add_update_other_officers" />

                <input type="hidden" name="page" value="<?php echo isset($_REQUEST['page']) ? $_REQUEST['page'] : 'add'; ?>" />

                <input type="hidden" name="page_id" value="<?php echo isset($_REQUEST['id']) ? $_REQUEST['id'] : ''; ?>" />

                <input type="hidden" name="redirect" value="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

                <input type="submit" class="btn btn-outline-light btn-sm" value="Publish"> 

            </div>

        </div>

    </div>



</form>



<script type="text/javascript">

    jQuery(document).ready(function () {


        jQuery("#cmsForm input, #cmsForm textarea").attr("autocomplete", "off");
        jQuery("input.paste-disabled, textarea.paste-disabled").attr("onpaste", "return false");

        jQuery("#cmsForm").validate({

            rules: {
            'post[holding_post]': {
                required: true,
                noUrlsOrScripts: true,
                contains: ["test", "test test", "Test"]
            },
            'post[officer_name]': {
                required: true,
                noUrlsOrScripts: true,
                contains: ["test", "test test", "Test"]
            },
            
        },

        messages: {
            'post[officer_name]': {
                required: "Please fill the field.",
                
            },
            'post[holding_post]': {
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

                var formdata = new FormData(jQuery("#cmsForm"));

                jQuery.ajax({

                    data: formdata,

                    type: 'post',

                    dataType: 'json',

                    contentType: false,

                    processData: false,

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