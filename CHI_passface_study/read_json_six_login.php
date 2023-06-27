<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "K1dzteam!", "PassFace");
$data = $_POST["img"];
$data1 = $_POST["username"];
$sql1 = "SELECT MAX(id) from log_108_credentials where uname = '$data1'";
$rest = mysqli_query($link, $sql1);
$row = mysqli_fetch_array($rest);
date_default_timezone_set('America/Boise');
$timestamp = date('Y-m-d H:i:s');
$sql = "UPDATE log_108_credentials SET p7 = '$data', p7_time='$timestamp' WHERE uname = '$data1' AND id = '$row[0]'";
mysqli_query($link, $sql);

$sql1  = "SELECT p1,p2,p3,p4,p5,p6,p7 FROM log_108_credentials WHERE uname ='$data1' AND id = '$row[0]'";
$result = mysqli_query($link, $sql1);
$res = mysqli_fetch_row($result);
$string_from_array = implode("-", $res);
$uname_and_string_from_array = $string_from_array.$data1;
$sql = "UPDATE log_108_credentials SET all_images = '$string_from_array' WHERE uname = '$data1' AND id = '$row[0]'";
mysqli_query($link, $sql);
$test = md5($uname_and_string_from_array, TRUE);


$sql3 = "UPDATE log_108_credentials SET hash = '$test' WHERE uname = '$data1'  AND id = '$row[0]' ";
$result = mysqli_query($link, $sql3);

$sql4 = "SELECT hash FROM log_108_credentials WHERE uname ='$data1'  AND id = '$row[0]'";
$result_hash_login_credentials = mysqli_query($link, $sql4);
$result_hash_login_credentials = mysqli_fetch_row($result_hash_login_credentials)[0];


$sql5 = "SELECT hash FROM reg_108_credentials WHERE uname ='$data1'";
$result_hash_credentials = mysqli_query($link, $sql5);
$result_hash_credentials = mysqli_fetch_row($result_hash_credentials)[0];


mysqli_close($link);
if ($result_hash_login_credentials != $result_hash_credentials)
{
  echo "failure";
}else{
  echo "success";
}

?>
