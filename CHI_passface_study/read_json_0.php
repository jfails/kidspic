<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "K1dzteam!", "PassFace");


if(isset($_POST["username"]))
{
  $username = mysql_real_escape_string($_POST['username']);
  if(!empty($username))
  {
    $query = mysql_query("SELECT uname from credentials where uname= '$username'");
    $username_result = mysql_num_rows_query($query);
    if($username_result==0)
    {
      echo "Username is available!";
    }
    else if($username_result==1)
    {
      echo "Username is already taken, please choose different!";

    }
  }
}
//$data will contain the_id
//do some processing

// Check connection
//if($link === false){
//  die("ERROR: Could not connect. " . mysqli_connect_error());
//}

// Attempt insert query execution


