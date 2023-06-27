<?php
$link = mysqli_connect("localhost", "root", "K1dzteam!", "PassFace");
$data = $_POST["user_name"];

    if(isset($data))
    {
        $sql = "SELECT * FROM picture_store where user_name='$data'";
        $result = mysqli_query($link, $sql);

        if (mysqli_num_rows($result) > 0)
        {
            echo 'taken';
        } else
        {
            echo 'not_taken';
        }

   }
