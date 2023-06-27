<?php
session_start();
?>
    <!DOCTYPE html>
    <html>

    <body>

        <head>
        <script src="./jQuery v3.4.1.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="login_Page_new.css">
        <script>
            
       
    $(document).ready(function() {
            $('#usernamesis').on('keyup', function(){
                
  var username = $('#usernamesis').val();
  if (username == '') {
  	return;
  };
  $.ajax({
    url: 'login_test.php',
    type: 'POST',
    data: {
    	user_name : username,
    },
    success: function(response){
      if (response.trim() == 'taken' ) {
          $('#availability').text("Username already taken, please choose different!").css({"font-family":"Frosty","font-size":22, "font-style": "italic", "font-weight": "bold", "color": "red"})
$("#nextbtn").attr("disabled", true);
      }else if (response.trim() == 'not_taken') {
          $('#availability').text("")
$("#nextbtn").attr("disabled", false);
      }
      else 
      {
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
        <center><h1> <span class="h1"> Please enter your details</h1></center>
        <br>
        <br>
        <form id="login_form" align="center" method="post" action="./test.php">
            <b> First name</b>: <input type="text" class="textbox" placeholder="Enter your First name" name="firstname" required>
            <br>
            <br><b> Last name</b>: <input type="text" class="textbox" placeholder="Enter your Last name" name="lastname" required>
            <br>
            <br> <b> User name</b>: <input type="text" class="textbox" id="usernamesis" name="username"  placeholder="Enter your User name" required>
            <br>
            <br>
            <br>
            <span id= "availability"></span>
            <br>
            <br>
            <a href="./test.php"><input type="Submit" id="nextbtn" class="btn" name="next" value="Next"></a>
        </form>
    </body>
    </html>

    
