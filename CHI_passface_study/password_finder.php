<?php
session_start();
?>

<!DOCTYPE html>
<html>

<body>

    <head>
        <link rel="stylesheet" type="text/css" href="login_Page_new.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>   
 </head>
    <br><br><br><br><br><br><br><br><br><br><br>
    <h1 class="h1">Enter the username below to find the password!</h1>
<center>
        <form id="password_retriver_form" align="center" method="post" action="./password_results.php">
            <br>
            <br> <b> Username </b>: <input type="text" class="textbox" id="usernamesis" name="username" height="2" placeholder="Enter your Username " required >
            <br>
            <br>
            <span id= "availability"></span>
        <br>
        <br>
        <br>

            <a href="./password_results.php"><input type="Submit" id="submit_button" class="btn"  name="next" value= "Next"></a>
        <br>
        <br>
        <br>
</body>
  </html>

