/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 * 
 */

"use strict";


$(document).ready(function() {
    /**
     * for showing edit item popup
     */

    $(document).on('click', "#edit-item", function() {
        $(this).addClass(
            'edit-item-trigger-clicked'
        ); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

        var options = {
            'backdrop': ''
        };
        $('#EditModal').modal(options)
    })

    // on modal show
    $('#EditModal').on('show.bs.modal', function() {
        var el = $(".edit-item-trigger-clicked"); // See how its usefull right here? 
        var row = el.closest(".data-row");

        // get the data
        var id = el.data('item-id');
        var name = row.children(".name").text();
        var description = row.children(".description").text();

        // fill the data in the input fields
        $("#modal-input-id").val(id);
        $("#modal-input-name").val(name);
        $("#modal-input-description").val(description);

    })

    // on modal hide
    $('#EditModal').on('hide.bs.modal', function() {
        $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
        $("#edit-form").trigger("reset");
    })
})






$(document).ready(function() {

    $(document).on('click', "#info-item", function() {
        $(this).addClass(
            'info-item-trigger-clicked'
        ); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

        var options = {
            'backdrop': ''
        };
        $('#ModalInfo').modal(options)
    })

    // on modal show
    $('#ModalInfo').on('show.bs.modal', function() {
        var el = $(".info-item-trigger-clicked"); // See how its usefull right here? 
        var row = el.closest(".data-row");

        // get the data
        var id = row.children(".id").text();
        var name = row.children(".name").text();
        var description = row.children(".description").text();
        var category = row.children(".category").text();
        var created = row.children(".created").text();
        var updated = row.children(".updated").text();
        var done = row.children(".done").text();

        // fill the data in the input fields
        $("#info-id").val(id);
        $("#info-name").val(name);
        $("#info-description").val(description);
        $("#info-category").val(category);
        $("#info-created").val(created);
        $("#info-updated").val(updated);
        $("#info-done").val(done);

    })

    // on modal hide
    $('#ModalInfo').on('hide.bs.modal', function() {
        $('.info-item-trigger-clicked').removeClass('info-item-trigger-clicked')
        $("#edit-form").trigger("reset");
    })
})