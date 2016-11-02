$(document).ready(function () {
    //display todo list n page load
    $.ajax({url: "includes/todolist.php", success: function (result) {
            $("#todolist").html(result);
        }});

    // add todos when button click    
    $(document).on("click", '#btnsubmit', function (e) {
        e.preventDefault();
        if ($("#betreff").val() == "") {
            $("#validation_div").removeClass('hide');
            return false;
        }
        $.ajax({type: "PUT",
            url: base_url + "includes/functions.php",
            data: $('#todo_form').serialize(),
            success: function (result) {
                $('#form-modal').modal('hide');
                $.ajax({url: "includes/todolist.php", success: function (result) {
                        $("#todolist").html(result);
                    }});
            }
        });
    });
    // clear the fileds and open the Modal window
    $(document).on("click", '#popup_window', function (event) {
        $("#validation_div").addClass('hide');
        $("#betreff").val('');
        $("#beschreibung").val('');
        $("#btnupdate").addClass('hide');
        $("#btnsubmit").removeClass('hide')
        $('#form-modal').modal('show');
    });

    // Open Modal for delete confirmation
    $(document).on("click", '.delete_todo', function (e) {
        var delete_id = $(this).closest("li").find('.hidden_id').val();
        $("#delete_id").val(delete_id);
        $('#delete-modal').modal('show');
    });

    // update item from todo list
    $(document).on("click", '#btnupdate', function (e) {
        e.preventDefault();
        if ($("#betreff").val() == "") {
            $("#validation_div").removeClass('hide');

            return false;
        }
        $.ajax({type: "POST",
            url: base_url + "includes/functions.php",
            data: $('#todo_form').serialize(),
            success: function (result) {
                $('#form-modal').modal('hide');
                $.ajax({url: "includes/todolist.php", success: function (result) {
                        $("#todolist").html(result);
                    }});
            }
        });
    });
    
    // select one item from todo list  for updating
    $(document).on("click", '.edit_todo', function (e) {
        e.preventDefault();
        var subject = $(this).closest("li").find('.list-group-item-heading').text();
        var description = $(this).closest("li").find('.list-group-item-text').text();
        var hidden_id = $(this).closest("li").find('.hidden_id').val();
        $("#betreff").val(subject);
        $("#beschreibung").val(description);
        $("#hiddenid_form").val(hidden_id);
        $("#btnsubmit").addClass('hide');
        $("#btnupdate").removeClass('hide');
        $('#form-modal').modal('show');

        $.ajax({type: "POST",
            url: base_url + "includes/functions.php",
            data: $('#todo_form').serialize(),
            success: function (result) {

            }
        });
    });


    // delete todo item when click on confirm
    $(document).on("click", '#confirm_btn', function (e) {
        e.preventDefault();
        var delete_id = $("#delete_id").val();
        $.ajax({type: "POST",
            url: base_url + "includes/functions.php",
            data: {id: delete_id, type: "DELETE"},
            success: function (result) {
                $('#delete-modal').modal('hide');
                $.ajax({url: "includes/todolist.php", success: function (result) {
                        $("#todolist").html(result);
                    }});

            }
        });
    });
    // close popup when click on No button
    $(document).on("click", '#not_confirm', function (e) {
        $('#delete-modal').modal('hide');
    });
});




