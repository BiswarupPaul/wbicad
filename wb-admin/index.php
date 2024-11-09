<?php
/*
 * Login Page Layout
 */

include 'autoloader.php';

session_start();

if (isset($_SESSION['admin'])) {
    header('location:dashboard.php');
    exit;
}



//echo password_hash("WbicadAdmin@2024!", PASSWORD_DEFAULT);
$Common->wc_notice();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>WBI&CA</title>
        <!-- Custom styles for this template-->
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/sb-admin.css">
    </head>
    <body class="intro-bg">
        <div class="auth-container">
            <div class="card">
                <div class="auth-content">
                    <div class="auth-header">
                        <!--<img src="img/login_logo.webp" alt="" class="img-fluid">-->
                        <h1 style="font-size:20px;">Information and Cultural Affairs Department</h1>
                    </div>
                    <h5>Hello! let's get started</h5>
                    <p>Login to continue.</p>

                    <form method="post" id="loginForm" class="formular">
                        <div class="mb-3">
                            <input type="text" class="form-control paste-disabled" placeholder="Username" name="user_name" id="user_name" autocomplete="user_name" />
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control paste-disabled" placeholder="Password" id="password-1" name="user_pass" autocomplete="user_pass" />
                        </div>
                        <div class="mb-3 text-center">
                            <div class="g-recaptcha" data-sitekey="6LdfOnAqAAAAAHLIsd7RbDvwv7q3VczUPCovJMSI" id="contactrecaptcha"></div>
                            <input type="hidden" class="hiddenRecaptcha" name="contact_hiddenRecaptcha" id="contact_hiddenRecaptcha">
                        </div>
                        <div class="mb-3 text-center">
                            <input type="hidden" name="action" value="admin_login" />
                            <button type="submit" class="btn btn-block btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- JavaScript-->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/sb-admin-2.js"></script>
        <script src="js/jquery.fancybox.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap5.min.js"></script>
        <script src="js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
        <script src="js/select2.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/hideShowPassword.min.js"></script>
        <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
        <script type="text/javascript">
            $('#password-1').hidePassword(true);
            $('#password-2').showPassword('focus', {
                toggle: {className: 'my-toggle'}
            });
            $('#show-password').change(function () {
                $('#password-3').hideShowPassword($(this).prop('checked'));
            });
        </script>
        <script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit"></script>
        <script>
            var CaptchaCallback = function () {
                if ($('#contactrecaptcha').length) {
                    grecaptcha.render('contactrecaptcha', {
                        'sitekey': '6LdfOnAqAAAAAHLIsd7RbDvwv7q3VczUPCovJMSI',
                        'callback': correctCaptcha_contact
                    });
                }
            };
            var correctCaptcha_contact = function (response) {
                $("#contact_hiddenRecaptcha").val(response);
            };
        </script>

        <script type="text/javascript">
            jQuery(document).ready(function () {

                jQuery("#loginForm input, #loginForm textarea").attr("autocomplete", "off");
                //jQuery("input.paste-disabled, textarea.paste-disabled").attr("onpaste", "return false");
                jQuery("#loginForm").validate({
                    rules: {
                        'user_name': {
                            required: true,
                            contains: ["test", "test test", "Test"],
                            lettersonly: true,
                        },
                        'user_pass': {
                            required: true,
                        },

                        'contact_hiddenRecaptcha': {
                        required: function () {
                            return grecaptcha.getResponse() === '';
                        }
                    }

                     
                    },
                    messages: {
                        'user_name': {
                            required: "Please enter a valid username.",
                        },
                        'user_pass': "Please enter a password.",
                        'contact_hiddenRecaptcha': { 
                            required: "Please validate the reCAPTCHA." ,
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
                    },
                    unhighlight: function (element, errorClass, validClass) {
                        jQuery(element).addClass("is-valid").removeClass("is-invalid");
                    },
                    submitHandler: function (form) {
                if (grecaptcha.getResponse() === '') {
                    $("#contact_hiddenRecaptcha-error").remove();
                    $("<em id='contact_hiddenRecaptcha-error' class='text-danger'>Please complete the reCAPTCHA</em>").insertAfter("#contactrecaptcha");
                    return false;
                }

                jQuery.ajax({
                    data: jQuery("#loginForm").serialize(),
                    type: 'post',
                    dataType: 'json',
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
                    return this.optional(element) || /^[a-z\s]+$/i.test(value);
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
            });
        </script>
    </body>
</html>
