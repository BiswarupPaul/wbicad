<?php
/*
 * Site Setting Page Layout
 */

include 'includes/header.php';

$options = $Common->options();
?>
<div class="row align-items-center">
    <div class="col-md-7">
        <div class="page-header">
            <h3>Site Setting</h3>
        </div>
    </div>

    <div class="col-md-5">
    </div>

</div>

<form id="introForm" method="post"  enctype="multipart/form-data">
    <div class="row g-2">
        <div class="col-md-12">
            <div class="sticky">
                <div class="whitebox mb-3">
                    <h2><strong>General Settings</strong></h2>
                    <div class="item_name">
                        <div class="row">
                            <div class="col-12">
                                <label>Website Name</label>
                                <input type="text" class="form-control paste-disabled" name="meta[website_name]" value="<?php echo!empty($options['website_name']) ? $options['website_name'] : ''; ?>" />
                            </div>
                            <div class="col-12">
                                <label>Website URL</label>
                                <input type="text" class="form-control paste-disabled" name="meta[website_url]" value="<?php echo!empty($options['website_url']) ? $options['website_url'] : ''; ?>" />
                            </div>
                            <div class="col-6">
                                <label>Email</label>
                                <input type="email" class="form-control paste-disabled" name="meta[email]" value="<?php echo!empty($options['email']) ? $options['email'] : ''; ?>" />
                            </div>
                            <div class="col-6">
                                <label>Phone No.</label>
                                <input type="text" class="form-control paste-disabled" id="phone"  name="meta[phone_no]" value="<?php echo!empty($options['phone_no']) ? $options['phone_no'] : ''; ?>" />
                            </div>
                            <div class="col-12">
                                <label>Whatsapp No.</label>
                                <input type="text" class="form-control paste-disabled" id="whatsapp_no" name="meta[whatsapp_no]"  value="<?php echo!empty($options['whatsapp_no']) ? $options['whatsapp_no'] : ''; ?>" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="whitebox mb-3">
                    <h2><strong>SMTP Setting</strong></h2>
                    <div class="item_name">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Host</label>
                                <input type="text" class="form-control" name="meta[smtp_host]" value="<?php echo!empty($options['smtp_host']) ? $options['smtp_host'] : ''; ?>" />
                            </div>
                            <div class="col-md-6">
                                <label>Port</label>
                                <input type="text" class="form-control" name="meta[smtp_port]" value="<?php echo!empty($options['smtp_port']) ? $options['smtp_port'] : ''; ?>" />
                            </div>
                            <div class="col-md-6">
                                <label>Username</label>
                                <input type="email" class="form-control" name="meta[smtp_username]" value="<?php echo!empty($options['smtp_username']) ? $options['smtp_username'] : ''; ?>" />
                            </div>
                            <div class="col-md-6">
                                <label>Password</label>
                                <input type="text" class="form-control" name="meta[smtp_password]" value="<?php echo!empty($options['smtp_password']) ? $options['smtp_password'] : ''; ?>" />
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="whitebox mb-3">
                            <h2><strong>Logo</strong></h2>
                            <div class="position-relative"> 
                                <?php
                                if (!empty($options['logo'])) {
                                    $logo = unserialize($options['logo']);
                                    $logo_fullPath = isset($logo['fullPath']) ? 'style="background-image:url(' . $logo['fullPath'] . ');background-size:cover;background-position:center center;"' : '';
                                }
                                ?>
                                <div class="img_holder" id="logo-preview" <?php echo $logo_fullPath; ?>>
                                    <label for="logo-upload" id="logo-label">Choose File</label>
                                    <input type="file" name="logo" id="logo-upload" />
                                </div>
                                <div class="remove_button">
                                    <a href="#" class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-xmark"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="whitebox mb-3">
                            <h2><strong>Favicon</strong></h2>
                            <div class="position-relative"> 
                                <?php
                                if (!empty($options['favicon'])) {
                                    $favicon = unserialize($options['favicon']);
                                    $favicon_fullPath = isset($favicon['fullPath']) ? 'style="background-image:url(' . $favicon['fullPath'] . ');background-size:cover;background-position:center center;"' : '';
                                }
                                ?>
                                <div class="img_holder" id="fav-preview" <?php echo $favicon_fullPath; ?>>
                                    <label for="fav-upload" id="fav-label">Choose File</label>
                                    <input type="file" name="favicon" id="fav-upload" />
                                </div>
                                <div class="remove_button">
                                    <a href="#" class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-xmark"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="publish-row">
        <div class="row justify-align-center align-items-center">
            <div class="col-md-6">
                <i class="fa-solid fa-calendar-days me-2"></i>
                <?php echo CURR_DATE; ?>
            </div>
            <div class="col-md-6 text-end">
                <input type="hidden" name="action" value="options" />
                <input type="submit" class="btn btn-outline-light btn-sm" value="Publish">
            </div>
        </div>
    </div>

</form>

<script type="text/javascript">
    jQuery(document).ready(function () {

        jQuery("#introForm input, #introForm textarea").attr("autocomplete", "off");
        jQuery("input.paste-disabled, textarea.paste-disabled").attr("onpaste", "return false");

        jQuery("#introForm").validate({

            
            rules: {

            'meta[website_name]': {
                        required: true,
                        contains: ["test", "test test", "Test"],
                        noulrs: true,
                    }, 

            'meta[website_url]': {
                        required: true,
                        contains: ["test", "test test", "Test"],
                    },        



            'meta[phone_no]': {
                        required: true,
                        number: true,
                        min: 1000000000,
                        wrong_number: true,
                        same_digit:true,
                    },
                

                'meta[whatsapp_no]': {
                        required: true,
                        number: true,
                        min: 1000000000,
                        wrong_number: true,
                        same_digit:true,
                    },


                'meta[email]': {
                        required: true,
                        email: true,
                        startswith: true,
                        contains: ["test", "test test", "Test"],
                    }, 

                     
                },


            messages: {        
            'meta[phone_no]': {
                        required: "Please enter your phone no.",
                        min: "Please enter a valid 10 digit phone no.",
                    },
                

            'meta[whatsapp_no]': {
                        required: "Please enter your whatsapp  no.",
                        min: "Please enter a valid 10 digit whatsapp no.",
                    },
            'meta[email]': {
                        required:"Please enter a valid email",
                    },

            'meta[website_name]': {
                        required:"Please enter a valid website name",
                        contains: "Please enter a valid value.",
                        noulrs: "URLs are not allowed.",
                    },

            'meta[website_url]': {
                        required:"Please enter a valid website url",
                        contains: "Please enter a valid value.",
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

                var formdata = new FormData(jQuery("#introForm")[0]);

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

        jQuery.validator.addMethod("same_digit", function (value, element) {
                return this.optional(element) || (test_same_digit(value) == false);
            }, "Please enter a valid Phone Number");

        jQuery.validator.addMethod("wrong_number", function (value, element) {
                return this.optional(element) || /^[6-9]\d{9}$/i.test(value);
            }, "Please enter a valid Phone Number.");

        jQuery.validator.addMethod("startswith", function (value, element) {
                return this.optional(element) || (value.startsWith('.') == false);
            }, "Please enter a valid Email ID");

        jQuery.validator.addMethod("noulrs", function (value, element) {
                return this.optional(element) || !/(https?:\/\/[^\s]+)/g.test(value);
            }, "URLs are not allowed.");

        


    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    <script>
                    $(document).ready(function () {
                        $('#phone').inputmask('9999999999');
                        $('#whatsapp_no').inputmask('9999999999');

                    });
    </script>


    

<?php include 'includes/footer.php' ?>