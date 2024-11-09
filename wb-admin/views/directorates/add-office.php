<?php

/*

 * Home Add Banner Layout

 */



if (isset($_REQUEST['page']) && $_REQUEST['page'] == 'edit') {

    $reqId = $_REQUEST['id'];

    $get_post = $Common->get_post(OFFICES, $reqId)[0];

    $get_post_meta = json_decode($get_post['metadata'], true);

}



$directorates = $Common->get_post(DIRECTORATES);

?>



<div class="row align-items-center g-2 mb-3">

    <div class="col-md-9">

        <div class="page-header">

            <h3>Add New </h3>

        </div>

    </div>



    <div class="col-md-3">

        <a href="layout.php?p=directorates-list-office" class="btn btn-primary float-end">

            <i class="fa-solid fa-plus me-1"></i>All Offices

        </a>

    </div>



</div>



<form method="post" id="postForm" enctype="multipart/form-data">

    <div class="item_name">

        <div class="whitebox mb-4">

            <div class="row">

                <div class="col-md-6 mb-4">

                    <label>Directorates</label>

                    <select class="form-control paste-disabled" name="post[directorate_id]" id="post[title]">

                        <option>Select Directorates</option>

                        <?php foreach ($directorates as $dir): ?>

                            <option value="<?php echo $dir['ID']; ?>" <?php echo isset($get_post['directorate_id']) && $get_post['directorate_id'] == $dir['ID'] ? 'selected="selected"' : ''; ?>><?php echo $dir['title']; ?></option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <div class="col-md-6 mb-4">

                    <label>Office Name</label>

                    <input type="text" class="form-control paste-disabled" name="post[office_name]" id="post[office_name]" value="<?php echo isset($get_post['office_name']) ? $get_post['office_name'] : ''; ?>">

                </div>

                <div class="col-md-6 mb-4">

                    <label>Officers Name</label>

                    <input type="text" class="form-control paste-disabled" name="post[officers_name]" id="post[officers_name]" value="<?php echo isset($get_post['officers_name']) ? $get_post['officers_name'] : ''; ?>">

                </div>

                <div class="col-md-6 mb-4">

                    <label>Designation</label>

                    <input type="text" class="form-control paste-disabled" name="post[designation]" id="post[designation]" value="<?php echo isset($get_post['designation']) ? $get_post['designation'] : ''; ?>">

                </div>

                <div class="col-md-6 mb-4">

                    <label>E-mail ID</label>

                    <input type="text" class="form-control paste-disabled" name="post[email]" id="post[email]" value="<?php echo isset($get_post['email']) ? $get_post['email'] : ''; ?>">

                </div>

                <div class="col-md-6 mb-4">

                    <label>Contact No.</label>

                    <input type="text" class="form-control paste-disabled" name="post[contact]" id="post[contact]" value="<?php echo isset($get_post['contact']) ? $get_post['contact'] : ''; ?>">

                </div>

                <div class="col-md-12 mb-4">

                    <label>Address</label>

                    <input type="text" class="form-control paste-disabled" name="post[address]" id="post[address]" value="<?php echo isset($get_post['address']) ? $get_post['address'] : ''; ?>">

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

                <input type="hidden" name="action" value="add_update_directorate_office" />

                <input type="hidden" name="page" value="<?php echo isset($_REQUEST['page']) ? $_REQUEST['page'] : 'add'; ?>" />

                <input type="hidden" name="page_id" value="<?php echo isset($_REQUEST['id']) ? $_REQUEST['id'] : ''; ?>" />

                <input type="hidden" name="redirect" value="layout.php?p=directorates-list-office" />

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

                    contains: ["test", "test test", "Test"],
                    noUrlsOrScripts:true

                },
                'post[designation]': {

                    // required: true,

                    contains: ["test", "test test", "Test"],
                    noUrlsOrScripts:true

                },
                'post[contact]': {

                    // required: true,

                    contains: ["test", "test test", "Test"],
                    noUrlsOrScripts:true

                },
                'post[address]': {

                    // required: true,

                    contains: ["test", "test test", "Test"],
                    noUrlsOrScripts:true

                },
                


//                'image': {

//                    required: true

//                },

                'post[status]': {

                    required: true

                },
                'post[link]':{
                    required: true,

                    validURL:true

                },
                'post[email]':{
                    required: true,
                    //validEmail: true,

                    // validURL:true

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
//         jQuery.validator.addMethod("validEmail", function(value, element) {
//     // Regular expression for email validation, updated to include dashes and periods in the domain
//     var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}(\.[a-zA-Z]{2,})?$/;
//     return this.optional(element) || emailPattern.test(value);
// }, "Please enter a valid email address.");


        jQuery.validator.addMethod("validURL", function(value, element) {
    // Updated regular expression for URL validation
    var urlPattern = /(http[s]?:\/\/)(www[\w]?\.)[\w]*\.[\w]{2,3}(\.[\w]{2})?$/;
    return this.optional(element) || urlPattern.test(value);
}, "Please enter a valid URL.");
        jQuery.validator.addMethod("noUrlsOrScripts", function (value, element) {
    // Regular expression to check for URLs or scripts
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


