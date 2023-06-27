<?php
ignore_user_abort(true);
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "K1dzteam!", "PassFace");

$data = $_POST["img"];
$data1 = $_POST["username"];
$p5_loc = $_POST["p5location"];
  //$data will contain the_id
//do some processing
 
// Check connection
//if($link === false){
  //  die("ERROR: Could not connect. " . mysqli_connect_error());
//}
// Attempt insert query execution
date_default_timezone_set('America/Boise');
$timestamp = date('Y-m-d H:i:s');
$sql = "UPDATE reg_108_credentials SET p5  = '$data', p5_location = '$p5_loc', p5_time = '$timestamp' WHERE uname = '$data1'";
//$sql = "UPDATE credentials SET credentials.p2='$data' WHERE uname= '$data1'";
//$sql = "INSERT INTO credentials (uname, p1) VALUES ('$data1', '$data')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
mysqli_close($link);
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>
