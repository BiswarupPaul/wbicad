<?php

/*

 * Add Schemes Layout

 */



if (isset($_REQUEST['page']) && $_REQUEST['page'] == 'edit') {

    $reqId = $_REQUEST['id'];

    $get_post = $Common->get_post(SCHEMES, $reqId)[0];

}

?>



<div class="row align-items-center g-2 mb-3">

    <div class="col-md-9">

        <div class="page-header">

            <h3>Add New </h3>

        </div>

    </div>



    <div class="col-md-3">

        <a href="layout.php?p=schemes-list-schemes" class="btn btn-primary float-end">

            <i class="fa-solid fa-plus me-1"></i>All Schemes

        </a>

    </div>



</div>



<form method="post" id="postForm" enctype="multipart/form-data">

    <div class="item_name">

        <div class="whitebox mb-4">

            <label>Title</label>

            <input type="text" class="form-control paste-disabled" name="post[title]" id="post[title]" value="<?php echo isset($get_post['title']) ? $get_post['title'] : ''; ?>">



            <label>Content</label>

            <textarea name="post[content]" id="post[content]" rows="6" class="form-control ck-editor paste-disabled" >

                <?php echo isset($get_post['content']) ? $get_post['content'] : ''; ?>

            </textarea>

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

                <input type="hidden" name="action" value="add_update_schemes" />

                <input type="hidden" name="page" value="<?php echo isset($_REQUEST['page']) ? $_REQUEST['page'] : 'add'; ?>" />

                <input type="hidden" name="page_id" value="<?php echo isset($_REQUEST['id']) ? $_REQUEST['id'] : ''; ?>" />

                <input type="hidden" name="redirect" value="layout.php?p=schemes-list-schemes" />

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

                    contains: ["test", "test test", "Test"]

                },

                'post[status]': {

                    required: true

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