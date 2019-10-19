$(document).ready(function() {
    $('#insert_form').on("submit", function(event) {
        event.preventDefault();
        if ($('#name').val() == "") {
            alert("Name is required");
        } else if ($('#address').val() == '') {
            alert("Address is required");
        } else if ($('#designation').val() == '') {
            alert("Designation is required");
        } else {
            $.ajax({
                url: "action/addNews.php",
                method: "POST",
                data: $('#insert_form').serialize(),
                beforeSend: function() {
                    $('#insert').val("Inserting");
                },
                success: function(data) {
                    $('#insert_form')[0].reset();
                    $('#add_data_Modal').modal('hide');
                    $('#employee_table').html(data);
                }
            });
        }
    });
});