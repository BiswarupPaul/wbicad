<?php

/*

 * Home Page CMS Manage Layout

 */



$cms_manage = $Common->about_cms_manage();

?>



<div class="row align-items-center">

    <div class="col-md-7">

        <div class="page-header">

            <h3>Mission & Vision Page CMS Manage</h3>

        </div>

    </div>



    <div class="col-md-5">

    </div>



</div>



<form method="post" id="cmsForm" enctype="multipart/form-data">

    <div class="item_name">

        <div class="whitebox mb-4">

            <div class="row">



                <div class="col-md-12 mb-2">

                    <label>Mission & Vision Content</label>

                    <textarea name="meta[mission_vision_content]" id="meta[mission_vision_content]" rows="6" class="form-control ck-editor" >

                        <?php echo isset($cms_manage['mission_vision_content']) ? $cms_manage['mission_vision_content'] : ''; ?>

                    </textarea>

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

                <input type="hidden" name="action" value="about_cms_manage" />

                <input type="hidden" name="redirect" value="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

                <input type="submit" class="btn btn-outline-light btn-sm" value="Publish"> 

            </div>

        </div>

    </div>



</form>



<script type="text/javascript">

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

            rules:{

                'meta[mission_vision_content]' : {

                    required : true ,
                    noUrlsOrScripts: true,
                    contains : ["test", "test test", "Test"],
                },
            },

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

        jQuery.validator.addMethod("noUrlsOrScripts", function (value, element) {
    // Regular expression to check for URLs or scripts
    var urlPattern = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*|<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>|www\.[^\s/$.?#].[^\s]*/gi;
    return !urlPattern.test(value);
}, "URLs and scripts are not allowed.");

    });

</script>

