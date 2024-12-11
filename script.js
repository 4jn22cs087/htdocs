$(document).ready(function () {
    $('#medicineForm').submit(function (e) {
        e.preventDefault(); // Prevent form from refreshing the page

        $.ajax({
            url: 'submit.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function (response) {
                $('#response').html(response);
            },
            error: function () {
                $('#response').html('<p style="color: red;">An error occurred. Please try again.</p>');
            }
        });
    });
});