$(document).ready(function() {

    $("form").submit(function() {
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "php/form.php",
            data: th.serialize(),
            success: function() {
                alert("Thank you!");
                setTimeout(function() {
                    th.trigger("reset");
                }, 1000);
            }
        });
        return false;
    });

});