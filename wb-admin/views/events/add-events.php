<?php
/*
 * Event Page CMS Manage Layout
 */

 if (isset($_REQUEST['page']) && $_REQUEST['page'] == 'edit') {
    $reqId = $_REQUEST['id'];
    $get_post = $Common->get_post(EVENTS, $reqId)[0];

}
  $ecategory = $Common->get_post(ECATEGORY);

?>
<div class="row align-items-center g-2 mb-3">
    <div class="col-md-9">
        <div class="page-header">
            <h3>Add New </h3>
        </div>
    </div>

    <div class="col-md-3">
        <a href="layout.php?p=events-list-events" class="btn btn-primary float-end">
            <i class="fa-solid fa-plus me-1"></i>All EVENTS
        </a>
    </div>

</div>

<form method="post" id="postForm" enctype="multipart/form-data">
    <div class="item_name">
        <div class="whitebox mb-4">
            <div class="row">

                
                <div class="col-md-6 mb-4">
                    <label> Event Name</label>
                    <input type="text" class="form-control paste-disabled" name="post[title]" id="post[title]" value="<?php echo isset($get_post['title']) ? $get_post['title'] : ''; ?>">
                    </div>
                    <div class="col-md-6 mb-4">
                    <label>Event Category</label>
                  <select class="form-control paste-disabled" name="post[event_id]" id="post[title]">
                        <option>Select Categories</option>
                        <?php foreach ($ecategory as $ecat): ?>
                            <option value="<?php echo $ecat['ID']; ?>" <?php echo isset($get_post['event_id']) && $get_post['event_id'] == $ecat['ID'] ? 'selected="selected"' : ''; ?>><?php echo $ecat['event_category']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            
             <div class="col-md-7 mb-2">
                    <label>Content</label>
                    <textarea name="post[content]" id="post[content]" rows="6" class="form-control ck-editor" >
                        <?php echo isset($get_post['content']) ? $get_post['content'] : ''; ?>
                    </textarea>
                </div>

                <div class="col-md-5 mb-3">
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

                <div class="col-md-6 mb-2">
                    <label>Venue </label>
                    <input type="text" class="form-control form-control-sm paste-disabled" name="post[venue]" id="post[venue]" value="<?php echo isset($get_post['venue']) ? $get_post['venue'] : ''; ?>">
                </div>
                <div class="col-md-6 mb-2">
    <label>Event Date</label>
    <input type="text" class="form-control form-control-sm paste-disabled"  name="post[event_date]" id="post[event_date]" value="<?php echo isset($get_post['event_date']) ? $get_post['event_date'] : ''; ?>">
</div>


</div>
<div class="col-md-12 mb-2">
                    <label>Gallery Images</label>
                    <div class="col-md-6">
                        <?php
                        $addt_data = isset($get_post['gallery_image']) ? unserialize($get_post['gallery_image']) : [];
                        if (!empty($addt_data)) {
                            $irr = 0;
                            foreach ($addt_data as $key => $val) {
                                ?>
                                <div class="add-table mb-3 cloned-row" id="added<?php echo $irr; ?>">
                                    <div class="input-group mb-2">
                                        <span class="input-group-text"><?php echo $irr + 1; ?>.</span>
                                        <input class="form-control form-control-sm" id="gallery_image[<?php echo $irr; ?>]" name="gallery_image[<?php echo $irr; ?>]" type="file">
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
                                    <input class="form-control form-control-sm" id="gallery_image[0]" name="gallery_image[0]" type="file">
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
                <input type="hidden" name="action" value="add_update_events" />
                <input type="hidden" name="page" value="<?php echo isset($_REQUEST['page']) ? $_REQUEST['page'] : 'add'; ?>" />
                <input type="hidden" name="page_id" value="<?php echo isset($_REQUEST['id']) ? $_REQUEST['id'] : ''; ?>" />
                <input type="hidden" name="redirect" value="layout.php?p=events-list-events" />
                <input type="submit" class="btn btn-outline-light btn-sm" value="Publish"> 
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
                'post[status]': {
                    required: true
                },
                'post[venue]': {
                    required: true,
                    noUrlsOrScripts: true

                },
                'post[event_date]': {
                    noUrlsOrScripts: true
                    // required: true
                }

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
                        if (res.status == 'success') {
                            location.href = res.redirect;
                        }
                    }
                });
                return false;
            }
        });
          jQuery.validator.addMethod("noUrlsOrScripts", function (value, element) {
            var urlPattern = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*|<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>|www\.[^\s/$.?#].[^\s]*/gi;
            return !urlPattern.test(value);
        }, "URLs and scripts are not allowed.");
        
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
</script>
<script type="text/javascript">
    jQuery(document).on("click", ".add-row", function () {
        var count = jQuery('.cloned-row').length;
        var $clone = jQuery('.cloned-row:eq(0)').clone();
        $clone.find('.add-row').after("<a href='javascript:void(0);' class='btn btn-outline-danger btn-sm less-row'><i class='fa-solid fa-minus'></i> Remove</a>")
        $clone.attr('id', "added" + count);
        $clone.find('span.input-group-text').text((count + 1) + '.');
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>