$(document).ready(function() {
    if($('#form').length !=0 ) {

        $('#form').submit(function () {

            var name = $('#input-name').val();
            var email = $('#input-email').val();
            var phone = $('#input-phone').val();
            var fail = "(´• ω •`) valid data";

            if (name.length < 2) fail = 'Имя не меньше 2 символов';
            else if (/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email) == false) fail = 'Вы ввели некорректный email';
            else if (/^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/.test(phone) == false) fail = "Вы ввели некорректный номер";
            alert(fail);

            if (fail == ("(´• ω •`) valid data")) {
                var content = $(this);
                $.ajax({
                    type: "POST",
                    url: "php/form.php",
                    data: content.serialize(),
                    success: function (html) {
                        $('.validation-massage').html(html);
                        console.log("ajax success");
                        setTimeout(function () {
                            content.trigger("reset");
                        }, 1000);
                    }
                });
                return false;
            }
        });
    }
});