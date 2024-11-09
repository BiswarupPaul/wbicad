<?php

/*

 * Home Page CMS Manage Layout

 */



$cms_manage = $Common->home_cms_manage();

?>



<div class="row align-items-center">

    <div class="col-md-7">

        <div class="page-header">

            <h3>Home Page CMS Manage</h3>

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

                    <label>About Heading</label>

                    <input type="text" class="form-control" name="meta[about_heading]" id="meta[about_heading]" value="<?php echo isset($cms_manage['about_heading']) ? $cms_manage['about_heading'] : ''; ?>">

                </div>



                <div class="col-md-4 mb-4">

                    <label>About Left Image</label>

                    <div class="border shadow position-relative">

                        <?php

                        if (isset($cms_manage['about_left_image'])) {

                            $logo = $cms_manage['about_left_image'];

                            $logo_fullPath = isset($logo) ? 'style="background-image:url(' . $logo . ');background-size:cover;background-position:center center;"' : '';

                        }

                        ?>

                        <div class="img_holder" id="about_left_image_preview" <?php echo $logo_fullPath; ?>>

                            <label for="about_left_image_preview_upload" id="about_left_image_label">Choose File</label>

                            <input type="file" name="about_left_image" id="about_left_image_preview_upload" />

                        </div>

                    </div>

                </div>



                <div class="col-md-8 mb-2">

                    <label>About Content</label>

                    <textarea name="meta[about_content]" id="meta[about_content]" rows="6" class="form-control ck-editor" >

                        <?php echo isset($cms_manage['about_content']) ? $cms_manage['about_content'] : ''; ?>

                    </textarea>

                </div>



                <div class="col-md-12 mb-2">

                    <label>About Right Slider</label>

                    <div class="col-md-6">

                        <?php

                        $addt_data = isset($cms_manage['about_right_image']) ? unserialize($cms_manage['about_right_image']) : [];

                        if (!empty($addt_data)) {

                            $irr = 0;

                            foreach ($addt_data as $key => $val) {

                                ?>

                                <div class="add-table mb-3 cloned-row" id="added<?php echo $irr; ?>">

                                    <div class="input-group mb-2">

                                        <span class="input-group-text"><?php echo $irr + 1; ?>.</span>

                                        <input class="form-control form-control-sm" id="about_right_image[<?php echo $irr; ?>]" name="about_right_image[<?php echo $irr; ?>]" type="file">

                                        <a class="btn btn-outline-success btn-sm add-row" href="javascript:void(0);"><i class="fa-solid fa-plus"></i> Add New</a>

                                        <?php if ($irr != 0): ?><a href="javascript:void(0);" class="btn btn-outline-danger btn-sm less-row"><i class="fa-solid fa-minus"></i> Remove</a><?php endif; ?>

                                    </div>

                                </div>

                                <?php

                                $irr++;

                            }

                        } else {

                            ?>

                            <div class="add-table mb-3 cloned-row" id="added0">

                                <div class="input-group mb-2">

                                    <span class="input-group-text">1.</span>

                                    <input class="form-control form-control-sm" id="about_right_image[0]" name="about_right_image[0]" type="file">

                                    <a class="btn btn-outline-success btn-sm add-row" href="javascript:void(0);"><i class="fa-solid fa-plus"></i> Add New</a>

                                </div>                            

                            </div>

                        <?php } ?>

                    </div>

                    <?php if (!empty($addt_data)) { ?>

                        <div class="row">

                            <?php foreach ($addt_data as $val) { ?>

                                <div class="col-3">

                                    <img src="<?php echo $val; ?>" class="img-thumbnail" style="height:200px;"/>

                                </div>

                            <?php } ?>

                        </div>

                    <?php } ?>

                </div>



                <div class="col-md-4 mb-4">

                    <label>CM Image</label>

                    <div class="border shadow position-relative">

                        <?php

                        if (isset($cms_manage['cm_image'])) {

                            $logo = $cms_manage['cm_image'];

                            $logo_fullPath = isset($logo) ? 'style="background-image:url(' . $logo . ');background-size:cover;background-position:center center;"' : '';

                        }

                        ?>

                        <div class="img_holder" id="cm_image_preview" <?php echo $logo_fullPath; ?>>

                            <label for="cm_image_upload" id="cm_image_label">Choose File</label>

                            <input type="file" name="cm_image" id="cm_image_upload" />

                        </div>

                    </div>

                </div>



                <div class="col-md-8 mb-2">

                    <label>CM Info</label>

                    <textarea name="meta[cm_info]" id="meta[cm_info]" rows="6" class="form-control ck-editor" >

                        <?php echo isset($cms_manage['cm_info']) ? $cms_manage['cm_info'] : ''; ?>

                    </textarea>

                </div>



                <div class="col-md-12 mb-2">

                    <label>Mission & Vision Heading</label>

                    <input type="text" class="form-control" name="meta[mission_vision_heading]" id="meta[mission_vision_heading]" value="<?php echo isset($cms_manage['mission_vision_heading']) ? $cms_manage['mission_vision_heading'] : ''; ?>">

                </div>



                <div class="col-md-12 mb-2">

                    <label>Mission & Vision Content</label>

                    <textarea name="meta[mission_vision_content]" id="meta[mission_vision_content]" rows="6" class="form-control ck-editor" >

                        <?php echo isset($cms_manage['mission_vision_content']) ? $cms_manage['mission_vision_content'] : ''; ?>

                    </textarea>

                </div>



                <div class="col-md-6 mb-4">

                    <label>Bottom Left Image</label>

                    <div class="border shadow position-relative">

                        <?php

                        if (isset($cms_manage['bottom_left_image'])) {

                            $logo = $cms_manage['bottom_left_image'];

                            $logo_fullPath = isset($logo) ? 'style="background-image:url(' . $logo . ');background-size:cover;background-position:center center;"' : '';

                        }

                        ?>

                        <div class="img_holder" id="bottom_left_image_preview" <?php echo $logo_fullPath; ?>>

                            <label for="bottom_left_image_upload" id="bottom_left_image_label">Choose File</label>

                            <input type="file" name="bottom_left_image" id="bottom_left_image_upload" />

                        </div>

                    </div>

                </div>



                <div class="col-md-6 mb-4">

                    <label>Bottom Right Image</label>

                    <div class="border shadow position-relative">

                        <?php

                        if (isset($cms_manage['bottom_right_image'])) {

                            $logo = $cms_manage['bottom_right_image'];

                            $logo_fullPath = isset($logo) ? 'style="background-image:url(' . $logo . ');background-size:cover;background-position:center center;"' : '';

                        }

                        ?>

                        <div class="img_holder" id="bottom_right_image_preview" <?php echo $logo_fullPath; ?>>

                            <label for="bottom_right_image_upload" id="bottom_right_image_label">Choose File</label>

                            <input type="file" name="bottom_right_image" id="bottom_right_image_upload" />

                        </div>

                    </div>

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

                <input type="hidden" name="action" value="home_cms_manage" />

                <input type="hidden" name="redirect" value="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

                <input type="submit" class="btn btn-outline-light btn-sm" value="Publish"> 

            </div>

        </div>

    </div>



</form>



<script type="text/javascript">

    jQuery(document).ready(function () {

        jQuery("#cmsForm").validate({

            

            rules:{
                'meta[about_heading]':{

                    required : true,

                    noUrlsOrScripts: true,

                    contains : ["test","test test","Test"],
                },

                'meta[mission_vision_heading]' : {

                    required : true ,
                    noUrlsOrScripts: true,
                    contains : ["test","test test","Test"],
                },

                'meta[cm_image]' : {

                    required : true ,
                },

                'meta[cm_info]' : {

                    required : true ,
                    noUrlsOrScripts: true,
                    contains : ["test","test test","Test"],
                },

                'meta[about_content]' : {

                    required : true,
                    noUrlsOrScripts: true,
                    contains : ["test","test test","Test"],
                },

                'meta[mission_vision_content]' : {

                    required : true ,
                    noUrlsOrScripts: true,
                    contains : ["test","test test","Test"],
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



<script type="text/javascript">

    jQuery(document).on("click", ".add-row", function () {

        var count = jQuery('.cloned-row').length;

        var $clone = jQuery('.cloned-row:eq(0)').clone();

        $clone.find('.add-row').after("<a href='javascript:void(0);' class='btn btn-outline-danger btn-sm less-row'><i class='fa-solid fa-minus'></i> Remove</a>")

        $clone.attr('id', "added" + count);

        $clone.find('span.input-group-text').text((++count) + '.');

        $clone.find('input[type="text"], input[type="number"], textarea, input[type="file"]').val('');

        $clone.find('select option').prop('selected', function () {

            return this.defaultSelected;

        });

        $clone.find('input[type="text"], input[type="number"], select, textarea, input[type="file"]').attr('name', function (index, src) {

            return src.replace('[0]', '[' + count + ']');

        });

        $clone.find('input[type="text"], input[type="number"], select, textarea, input[type="file"]').attr('id', function (index, src) {

            return src.replace('[0]', '[' + count + ']');

        });



        $clone.find('label').attr('for', function (index, src) {

            return src.replace('[0]', '[' + count + ']');

        });



        jQuery(this).parents('.add-table').after($clone);



        jQuery('.cke_2').each(function () {

            var $ids = jQuery('[id="' + this.id + '"]');

            if ($ids.length > 1) {

                $ids.not(':first').remove();

            }

        });



        CKEDITOR.replace(jQuery('#added' + count).find('textarea.ck-editor').prop('id'));

    });



    jQuery(document).on('click', ".less-row", function () {

        var len = jQuery('.cloned-row').length;

        if (len > 1) {

            jQuery(this).parents('.add-table').remove();



            jQuery('.cloned-row').find('input[type="text"]').each(function (index) {

                console.log(index);

                //this.name = this.name.replace('[0]', '[' + i + ']');

            });

        }

    });

</script>



