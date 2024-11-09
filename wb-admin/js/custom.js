jQuery(document).ready(function () {

    jQuery('#example, #example2, #example3, #example4, #example5, #example6, #example7, #example8').dataTable({
        responsive: true
    });

    jQuery('.multiple-select').select2({
        multiple: true,
    });
    jQuery('.single-select').select2();

    jQuery('.toast').toast("show");

    jQuery('.img_holder').each(function (index, currentElement) {
        var currentElement = $(this);
        var input_field = currentElement.find('input[type="file"]').attr('id');
        var preview_box = currentElement.attr('id');
        var label_field = currentElement.find('label').attr('id');

        jQuery.uploadPreview({
            input_field: '#' + input_field, // Default: .image-upload
            preview_box: '#' + preview_box, // Default: .image-preview
            label_field: '#' + label_field, // Default: .image-label
            label_default: "Choose File", // Default: Choose File
            label_selected: "Change File", // Default: Change File
            no_label: false                 // Default: false
        });
    });

    jQuery(".select2-multiple").select2({
        theme: "bootstrap",
        placeholder: "Select...",
        maximumSelectionSize: 6,
        containerCssClass: ':all:'
    });

    jQuery('.ck-editor').each(function () {
        CKEDITOR.replace(jQuery(this).prop('id'));
    });

});


