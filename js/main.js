$(document).ready(function() {

    if($('#form').length !=0 ) {
        $('#form').submit(function () {
            var content = $(this);
            $.ajax({
                type: "POST",
                url: "php/form.php",
                data: content.serialize(),
                success: function (html) {
                    $('.content').html(html);
                    console.log("ajax success");
                    setTimeout(function () {
                        content.trigger("reset");
                    }, 1000);
                }
            });
            return false;
        });
    }
});