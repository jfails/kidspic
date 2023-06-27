    $(document).ready(function() {
        $('#username').blur(function() {
            var username = $(this).val();
            $.ajax({
                url: "login_test.php",
                method: "POST",
                data: { user_name: username },
                dataType: "text",
                success: function(html) {
                    $('#availability').html(html);
                }
            });
        });
    });