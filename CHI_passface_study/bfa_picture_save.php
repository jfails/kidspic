<?php
$link = mysqli_connect("localhost", "root", "K1dzteam!", "PassFace");
$data = $_POST["img"];
date_default_timezone_set('America/Boise');
$timestamp = date('Y-m-d H:i:s');
$sql2 = "INSERT INTO PassFace.picture_store(user_name,picture,time_date) VALUES('charan_test','$data','$timestamp')";
mysqli_query($link, $sql2);
?>
