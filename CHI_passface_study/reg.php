<?php
session_start();
date_default_timezone_set('America/Boise');
$_SESSION['loading_timing'] = date('Y-m-d H:i:s');
?>
    <!DOCTYPE html>
    <html>

    <body>

        <head>
        <script src="./jQuery v3.4.1.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="login_Page_new.css">
        <script>
            
       
    $(document).ready(function next() {
            $('#usernamesis').on('keyup', function(){
                
  var username = $('#usernamesis').val();
  if (username == '') {
  	return;
  };
//var reg_start_time;
var page_load_time = "<?php echo $_SESSION['loading_timing']?>";
console.log("this is from reg page" + page_load_time);
var test = "dhanush";

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
        <form id="login_form" align="center" method="post" action="./reg_1.php" autocomplete="off">
            <b> First name</b>: <input type="text" class="textbox" placeholder="Enter your First name" name="firstname" required="required" autocomplete="off">
            <br>
            <br><b> Last name</b>: <input type="text" class="textbox" placeholder="Enter your Last name" name="lastname" required="required" autocomplete="off">
            <br>
            <br> <b> User name</b>: <input type="text" class="textbox" id="usernamesis" name="username"  placeholder="Enter your User name" required="required" autocomplete="off">
            <br>
            <br>
            <br>
            <span id= "availability"></span>
            <br>
            <br>
            <a href="./reg_1.php"><input type="Submit" id="nextbtn"  class="btn" name="next" value="Next"></a>
        </form>
    </body>
    </html>
