
<?php
/*server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "K1dzteam!", "PassFace");

//$image = $_POST["img"];
$uname = $_POST["username"];
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
//$p1_loc = $_POST["p1location"];

//if (empty($data['img'])) {
  //echo "please selct an image";
//}
date_default_timezone_set('America/Boise');
$timestamp = date('Y-m-d H:i:s');
$sql = "INSERT INTO reg_108_credentials (uname, firstname, lastname, p1_pre_time) VALUES ('$uname', '$fname' , '$lname', '$timestamp')";

if (mysqli_query($link, $sql)) {
  echo "Records added successfully.";
mysqli_close($link);
} else {
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
//mysqli_close($link);
