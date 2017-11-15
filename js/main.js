$(document).ready(function() {
    if($('#form').length !=0 ) {
        $('#form').submit(function () {
            event.preventDefault();

            var proceed = true;

            $("#form input[required=true], #form textarea[required=true]").each(function() {
                $(this).css('border-color', '');
                if (!$.trim($(this).val())) {
                    $(this).css('border-color', 'red');
                    proceed = false;
                }

                var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                if ($(this).attr("type") == "email" && !email_reg.test($.trim($(this).val()))) {
                    $(this).css('border-color', 'red');
                    proceed = false;
                }

                var tel_reg = /^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/;
                if ($(this).attr("type") == "tel" && !tel_reg.test($.trim($(this).val()))) {
                    $(this).css('border-color', 'red');
                    proceed = false;
                }
            });

            if (proceed)
            {
               var post_data = {
                    'name': $('input[name=name]').val(),
                    'email': $('input[name=email]').val(),
                    'phone': $('input[name=phone]').val()
                };

                $.ajax({
                    type: "POST",
                    url: "php/form.php",
                    data: post_data,
                    success: function (html) {
                        var rest = JSON.parse(html);
                        $('.validation-massage').html(rest.text);
                    }
                });
                return false;
            }
        });
        $("#form  input[required=true]").keyup(function() {
            $(this).css('border-color', '');
            // $("#result").slideUp();
        });
    }
});