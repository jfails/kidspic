<?php
ignore_user_abort(true);
$link = mysqli_connect("localhost", "root", "K1dzteam!", "PassFace");

$data = $_POST["img"];
$data1 = $_POST["username"];
$p7_loc = $_POST["p7location"];
$data2 = "test123";
date_default_timezone_set('America/Boise');
$timestamp = date('Y-m-d H:i:s');
$sql2 = "UPDATE reg_108_credentials SET p7 = '$data',  p7_location = '$p7_loc', p7_time = '$timestamp' WHERE uname = '$data1'";
mysqli_query($link, $sql2);
echo $sql2;
$sql1  = "SELECT p1,p2,p3,p4,p5,p6,p7 FROM reg_108_credentials WHERE uname ='$data1'";
$result = mysqli_query($link, $sql1);
$res = mysqli_fetch_row($result);
$string_from_array = implode("-", $res);
$uname_and_string_from_array = $string_from_array.$data1;
$sql = "UPDATE reg_108_credentials SET all_imgs = '$string_from_array' WHERE uname = '$data1' ";
$test = md5($uname_and_string_from_array, TRUE);
//$test = password_hash($r, PASSWORD_BCRYPT);


$sql3 = "UPDATE reg_108_credentials SET hash = '$test' WHERE uname = '$data1' ";
$result = mysqli_query($link, $sql3);

//$sql = "UPDATE reg_credentials SET credentials.p2='$data' WHERE uname= '$data1'";
//$sql = "INSERT INTO credentials (uname, p1) VALUES ('$data1', '$data')";
if (mysqli_query($link, $sql)) {
  echo "Records added successfully.";
mysqli_close($link);
} else {
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
//mysqli_close($link);

