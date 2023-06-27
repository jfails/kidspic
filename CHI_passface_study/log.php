<?php
session_start();
date_default_timezone_set('America/Boise');
$_SESSION["loading_timing"] = date('Y-m-d H:i:s');
//$pre_log_time = $_SESSION["loading_timing"];
?>
    <!DOCTYPE html>
    <html>

        <head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N92ZH63');</script>
<!-- End Google Tag Manager -->
        <script src="./jQuery v3.4.1.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./login_Page_new.css">
        <script>
      $(document).ready(function() {
            $('#usernamesis').on('keyup',function(){
                
  var username = $('#usernamesis').val();
  //$('#availability').text('testing');

//var page_load_time = "<?php echo $pre_log_time?>";
  $.ajax({
    url: 'login_test.php',
    type: 'POST',
    data: {
    	user_name : username,
    },
    success: function(response){
            if (response.trim() == 'not_taken') {
          $("#submit_next_button").attr("disabled",true).css('opacity',0.2);
          $('#availability').text("Username not found, create an account?").css({"font-family":"Comic Sans MS", "font-style": "italic", "font-weight": "bold", "color": "red"});
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
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N92ZH63"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

        <h1 span class="h1"> Please enter your username</h1>
        <br>
        <form id="login_form" align="center" method="post" onsubmit="return false" action="./log_1.php" autocomplete="off">
            <br>
            <br> <b> Username </b>: <input type="text " class="textbox " id="usernamesis" name="username" height="2" autocomplete="off" readonly 
onfocus="this.removeAttribute('readonly');" placeholder="Enter your Username " required >
            <br>
            <br>
            <span id= "availability"></span>
        <br>
        <br>
        <br>

      <a href="./log_1.php"><input type="Submit" id="submit_next_button" onclick="form.submit()" class="btn" name="next" value="Next"></a>

        </form>
        <br>
        <br>
        <form id="test1" align="center" method="post" action="./reg.php">

                <!--a href="./registration.php"><input type="Submit" id="submit_next_button1" class="registerbtn" name="next1" value="Register"></a-->
                <a href="./reg.php">create an account</a>
            </form>
    </body>
    
    </html>

    
