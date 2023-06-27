
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "K1dzteam!", "PassFace");
$data = $_POST["user_name"];

    if(isset($data))
    {
        $sql = "SELECT * FROM reg_credentials where uname='$data'";
        $result = mysqli_query($link, $sql);

        if (mysqli_num_rows($result) > 0)
        {
            echo 'taken';
        } else 
        {
            echo 'not_taken';
        }
                
   }
