<?php

/*

 * Directorates Page CMS Manage Layout

 */



if (isset($_REQUEST['page']) && $_REQUEST['page'] == 'edit') {

    $reqId = $_REQUEST['id'];

    $get_post = $Common->get_post(DEPTHEAD, $reqId)[0];

}

?>



<div class="row align-items-center">

    <div class="col-md-7">

        <div class="page-header">

            <h3>Edit Member</h3>

        </div>

    </div>

    <div class="col-md-5">

        <a href="layout.php?p=contacts-list-head" class="btn btn-primary float-end">

            <i class="fa-solid fa-plus me-1"></i>All Members

        </a>

    </div>

</div>



<form method="post" id="cmsForm" enctype="multipart/form-data">

    <div class="item_name">

        <div class="whitebox mb-4">



            <div class="row">

                <div class="col-md-4 mb-4">

                    <label>Image</label>

                    <div class="border shadow position-relative">

                        <?php

                        if (isset($get_post['image'])) {

                            $logo = $get_post['image'];

                            $logo_fullPath = isset($logo) ? 'style="background-image:url(' . $logo . ');background-size:cover;background-position:center center;"' : '';

                        }

                        ?>

                        <div class="img_holder" id="image_preview" <?php echo $logo_fullPath; ?>>

                            <label for="image_preview_upload" id="image_label">Choose File</label>

                            <input type="file" name="image" id="image_preview_upload" />

                        </div>

                    </div>

                </div>

                <div class="col-md-8 mb-2">

                    <label>Designation</label>

                    <input  type="text" class="form-control paste-disabled" name="post[designation]" id="post[designation]" value="<?php echo isset($get_post['designation']) ? $get_post['designation'] : ''; ?>">

                    <label>Name</label>

                    <input type="text" class="form-control paste-disabled" name="post[title]" id="post[title]" value="<?php echo isset($get_post['title']) ? $get_post['title'] : ''; ?>">

                    <label>Address</label>

                    <input type="text" class="form-control paste-disabled" name="post[address]" id="post[address]" value="<?php echo isset($get_post['address']) ? $get_post['address'] : ''; ?>">

                    <label>Contact</label>

                    <input type="text" class="form-control paste-disabled" name="post[contact]" id="post[contact]" value="<?php echo isset($get_post['contact']) ? $get_post['contact'] : ''; ?>">

                    <label>Fax</label>

                    <input type="text" class="form-control paste-disabled" name="post[fax]" id="post[fax]" value="<?php echo isset($get_post['fax']) ? $get_post['fax'] : ''; ?>">

                </div>

            </div>

        </div>

    </div>



    <div class="publish-row">

        <div class="row align-items-center justify-align-center">

            <div class="col-md-8">

                <i class="fa-solid fa-calendar-days me-2"></i>

                <?php echo CURR_DATE; ?>

            </div>

            <div class="col-md-4">

                <input type="hidden" name="action" value="add_update_head" />

                <input type="hidden" name="page" value="<?php echo isset($_REQUEST['page']) ? $_REQUEST['page'] : 'add'; ?>" />

                <input type="hidden" name="page_id" value="<?php echo isset($_REQUEST['id']) ? $_REQUEST['id'] : ''; ?>" />

                <input type="hidden" name="redirect" value="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

                <input type="submit" class="btn btn-outline-light btn-sm" value="Publish"> 

            </div>

        </div>

    </div>



</form>

<script>
	jQuery(document).ready(function ($) {
		$("input[name='contact']").inputmask('9999999999');
        $("input[name='fax']").inputmask('9999999999');
	});
</script>
<script type="text/javascript">
jQuery(document).ready(function () {
    jQuery("#cmsForm input, #cmsForm textarea").attr("autocomplete", "off");
    jQuery("input.paste-disabled, textarea.paste-disabled").attr("onpaste", "return false");
    
    jQuery("#cmsForm").validate({ // initialize the plugin
        rules: {
            'post[designation]': {
                required: true,
                contains: ["test", "test test", "Test"],
                noUrlsOrScripts: true
            },
            'post[title]': {
                required: true,
                contains: ["test", "test test", "Test"],
                noUrlsOrScripts: true
            },
            'post[address]': {
                required: true,
                noUrlsOrScripts: true
            },
            'post[contact]': {
                required: true,
                noUrlsOrScripts: true,
                phoneMultiple:true
            },
            'post[fax]': {
                required: true,
                noUrlsOrScripts: true
            }
        },
        messages: {
            'post[designation]': {
                required: "Please fill the field.",
               
                contains: "Please enter a valid value."
            },
            'post[title]': {
                required: "Please fill the field.",
          
                contains: "Please enter a valid value."
            },
            'post[address]': "Please fill the field.",
            'post[contact]': {
                required: "Please enter phone no.",
           
            },
            'post[fax]': {
                required: "Please enter fax no.",
           
         
            }
        },
        errorClass: "text-danger text-italic",
        errorElement: "p",
        errorPlacement: function (error, element) {
            var sel = jQuery(element).attr('name');
            jQuery('#' + sel + '-error').remove();
            error.insertAfter(element);
        },
        highlight: function (element, errorClass, validClass) {
            jQuery(element).parents(".form-group").addClass("has-error").removeClass("has-success");
        },
        unhighlight: function (element, errorClass, validClass) {
            jQuery(element).parents(".form-group").addClass("has-success").removeClass("has-error");
        },
        submitHandler: function (form) {
            var formdata = new FormData(jQuery("#cmsForm")[0]);

            jQuery.ajax({
                data: formdata,
                type: 'post',
                dataType: 'json',
                contentType: false,
                processData: false,
                url: '<?php echo AJAX_URL; ?>',
                success: function (res) {
                    if (res.status == 'success') {
                        location.href = res.redirect;
                    }
                }
            });
            return false;
        }
    });

    jQuery.validator.addMethod("lettersonly", function (value, element) {
        return this.optional(element) || /^[a-zA-Z\s]+$/i.test(value);
    }, "Letters and spaces only please");

    jQuery.validator.addMethod("contains", function (value, element, param) {
        if (this.optional(element)) {
            return true;
        }
        for (var i = 0; i < param.length; i++) {
            if (value.includes(param[i])) {
                return false;
            }
        }
        return true;
    }, "Please enter a valid value.");
    
    jQuery.validator.addMethod("noUrlsOrScripts", function (value, element) {
    // Regular expression to check for URLs or scripts
    var urlPattern = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*|<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>|www\.[^\s/$.?#].[^\s]*/gi;
    return !urlPattern.test(value);
}, "URLs and scripts are not allowed.");
jQuery.validator.addMethod("phoneMultiple", function (value, element) {
    // Split the value by comma or space (assuming multiple phone numbers are separated by comma or space)
    var phones = value.split(/[,\s]+/);

    for (var i = 0; i < phones.length; i++) {
        // Trim each phone number to remove any leading or trailing whitespace
        var phone = phones[i].trim();
        // Check if phone number is not empty and exceeds 15 characters
        if (phone !== '' && phone.length > 15) {
            return false;
        }
        }
            return true;
        }, "Each phone number should not exceed 15 characters.");
});
</script>


<!-- <script type="text/javascript">

    jQuery(document).ready(function () {

        jQuery("#cmsForm").validate({

            /*rules: {

             'meta[about_heading]': {

             required: true,

             contains: ["test", "test test", "Test"]

             },

             'meta[about_content]': {

             required: true,

             contains: ["test", "test test", "Test"]

             }

             },*/

           

            errorClass: "text-danger",

            errorElement: "em",

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

    });

</script> -->