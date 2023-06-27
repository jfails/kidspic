<?php
session_start();
?>
    <!DOCTYPE html>
    <html>

    <body>

        <head>
        <script src="./jQuery v3.4.1.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="login_Page.css">
        <script>
      $(document).ready(function() {
            $('#usernamesis').on('keyup',function(){
                
  var username = $('#usernamesis').val();
  //$('#availability').text('testing');
  $.ajax({
    url: 'login_test.php',
    type: 'POST',
    data: {
    	user_name : username,
    },
    success: function(response){
      if (response.trim() == 'not_taken') {
          $("#submit_next_button").attr("disabled",true).css('opacity',0.2);
          $('#availability').text("Please enter the valid username or please go back and register!").css({"font-family":"Comic Sans MS", "font-style": "italic", "font-weight": "bold", "color": "red"});
      }
      else if (response.trim() == '')
      {
        $('#availability').text("");
      }
      else if (response.trim() == 'taken') {
        $("#submit_next_button").attr("disabled",false).css('opacity',1.0);
        $('#availability').text("");
      }
    },
    fail: function(resp, status, xhr) {
        alert("Failed");
        if(xhr.status == 202)
        $('#availability').html("failed");
        alert("Failed");
    }
  });
 });		
    });
    </script>
        </head>
        <h1 <span class="h1"> Please enter your details</h1>
        <br>
        <br>
        <br>
        <br>
        <form id="login_form " align="center " method="post " action="./test.php">
            <br>
            <br> <b> Username </b>: <input type="text " class="textbox " id="usernamesis" name="username"  placeholder="Enter your User name " required>
            <br>
            <br>
            <br>
            <br>
            <span id= "availability"></span>
        <br>
        <br>
        <br>

            <a href="./test.php"><input type="Submit" id="submit_next_button" class="btn" name="next" value="Next" disabled='disabled'></a>
        </form>
    </body>
    
    </html>

    