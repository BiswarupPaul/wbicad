<?php

/*

 * Directorates Page CMS Manage Layout

 */



if (isset($_REQUEST['page']) && $_REQUEST['page'] == 'edit') {

    $reqId = $_REQUEST['id'];

    $get_post = $Common->get_post(DIRECTORATES, $reqId)[0];

}

?>



<div class="row align-items-center">

    <div class="col-md-7">

        <div class="page-header">

            <h3><?php echo $get_post['title']; ?> Page Manage</h3>

        </div>

    </div>



    <div class="col-md-5">

    </div>



</div>



<form method="post" id="cmsForm" enctype="multipart/form-data">

    <div class="item_name">

        <div class="whitebox mb-4">



            <label>Title</label>

            <input type="text" class="form-control paste-disabled" name="post[title]" id="post[title]" value="<?php echo isset($get_post['title']) ? $get_post['title'] : ''; ?>">



            <div class="row">

                <div class="col-md-4 mb-4">

                    <label>About Image</label>

                    <div class="border shadow position-relative">

                        <?php

                        if (isset($get_post['about_image'])) {

                            $logo = $get_post['about_image'];

                            $logo_fullPath = isset($logo) ? 'style="background-image:url(' . $logo . ');background-size:cover;background-position:center center;"' : '';

                        }

                        ?>

                        <div class="img_holder" id="about_image_preview" <?php echo $logo_fullPath; ?>>

                            <label for="about_image_preview_upload" id="about_image_label">Choose File</label>

                            <input type="file" name="about_image" id="about_image_preview_upload" />

                        </div>

                    </div>

                </div>

                <div class="col-md-8 mb-2">

                    <label>About Directorate</label>

                    <textarea name="post[about_directorate]" id="post[about_directorate]" rows="6" class="form-control paste-disabled ck-editor" >

                        <?php echo isset($get_post['about_directorate']) ? $get_post['about_directorate'] : ''; ?>

                    </textarea>

                </div>

            </div>

            <hr/>

            <div class="row">

                <div class="col-md-8 mb-2">

                    <label>Directorate Name</label>

                    <input type="text" class="form-control paste-disabled" name="post[directorate_name]" id="post[directorate_name]" value="<?php echo isset($get_post['directorate_name']) ? $get_post['directorate_name'] : ''; ?>">

                    <label>Directorate Designation</label>

                    <input type="text" class="form-control paste-disabled" name="post[directorate_designation]" id="post[directorate_designation]" value="<?php echo isset($get_post['directorate_designation']) ? $get_post['directorate_designation'] : ''; ?>">

                    <label>Directorate Office Address</label>

                    <input type="text" class="form-control paste-disabled" name="post[directorate_office_address]" id="post[directorate_office_address]" value="<?php echo isset($get_post['directorate_office_address']) ? $get_post['directorate_office_address'] : ''; ?>">

                </div>

                <div class="col-md-4 mb-4">

                    <label>Directorate Image</label>

                    <div class="border shadow position-relative">

                        <?php

                        if (isset($get_post['directorate_image'])) {

                            $logo = $get_post['directorate_image'];

                            $logo_fullPath = isset($logo) ? 'style="background-image:url(' . $logo . ');background-size:cover;background-position:center center;"' : '';

                        }

                        ?>

                        <div class="img_holder" id="directorate_image_preview" <?php echo $logo_fullPath; ?>>

                            <label for="directorate_image_preview_upload" id="directorate_image_label">Choose File</label>

                            <input type="file" name="directorate_image" id="directorate_image_preview_upload" />

                        </div>

                    </div>

                </div>

            </div>

            <label>Brief About Directorate</label>

            <textarea name="post[directorate_brief]" id="post[directorate_brief]" rows="6" class="form-control paste-disabled ck-editor" >

                <?php echo isset($get_post['directorate_brief']) ? $get_post['directorate_brief'] : ''; ?>

            </textarea>

            

            <label>Bottom Content</label>

            <textarea name="post[bottom_content]" id="post[bottom_content]" rows="6" class="form-control paste-disabled ck-editor" >

                <?php echo isset($get_post['bottom_content']) ? $get_post['bottom_content'] : ''; ?>

            </textarea>

            

        </div>

    </div>



    <div class="publish-row">

        <div class="row align-items-center justify-align-center">

            <div class="col-md-8">

                <i class="fa-solid fa-calendar-days me-2"></i>

                <?php echo CURR_DATE; ?>

            </div>

            <div class="col-md-4">

                <input type="hidden" name="action" value="directorates_cms_manage" />

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

            'post[title]': {

                    required: true,
                    noUrlsOrScripts: true,
                    contains: ["test", "test test", "Test"]

                },

                'post[about_directorate]': {

                    required: true,
                    noUrlsOrScripts: true,
                    

                },

                'post[directorate_brief]': {

                    required: true,

                    noUrlsOrScripts: true,

                },

                'post[directorate_office_address]': {

                    required: true,
                    noUrlsOrScripts: true,
                    contains: ["test", "test test", "Test"]

                },

                'post[directorate_designation]': {

                    required: true,
                    noUrlsOrScripts: true,
                    contains: ["test", "test test", "Test"]

                },

                'post[directorate_name]': {

                    required: true,

                    contains: ["test", "test test", "Test"],

                    noUrlsOrScripts: true

                },

                'post[bottom_content]': {

                    noUrlsOrScripts: true,

                },

                messages: {
           
            'post[title]': {
                required: "Please fill the field.",
               
            },
            'post[address]': "Please fill the field.",

            'post[directorate_name]': {
                required: "Please fill the field.",
              
            },

            'post[directorate_designation]': {
                required: "Please fill the field.",
               
            },

            'post[directorate_office_address]': {
                required: "Please fill the field.",
             
            },

            'post[directorate_brief]': {
                required: "Please fill the field.",
              
            },

            'post[about_directorate]': {
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