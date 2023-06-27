<?php

session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <head>
        <link rel="stylesheet" type="text/css" href="login_Page_new.css">
    </head>
    <br><br><br><br><br><br><br><br><br><br><br>
    <h1 class="h1">Yay <?php echo $_SESSION["username"]; ?>!! you are logged in</h1>
    <center>
    <div>
    <a href='./login.php'><button name="button_next" class="btn" type="button">Home</button></a>
    </div>
</center>
    </form>
</body>

</html>