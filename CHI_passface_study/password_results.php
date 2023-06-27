<?php
session_start();
$test_uname = ucfirst($_POST["username"]);
?>

<!DOCTYPE html>
<html>

<body>

    <head>
        <link rel="stylesheet" type="text/css" href="login_Page_new.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>   
 </head>
    <br><br><br><br><br><br><br><br><br><br><br>
<center><h1>Image password of <?php echo $test_uname?>!</h1></center>
<center>

<?php 
        $sql ="SELECT p1,p2,p3,p4,p5,p6,p7 FROM reg_108_credentials WHERE uname = '$test_uname'";
        $link = mysqli_connect("localhost", "root", "K1dzteam!", "PassFace");

$result = mysqli_query($link, $sql);
$array_slice = mysqli_fetch_row($result);
?>

<table width="500" border="0" cellpadding="5">

<tr>

<td align="center" valign="center">
<img src="./images/Animal/<?php echo $array_slice[0]?>.jpg" alt="description here" />
<br />
<b>1. Animal Picture</b>
</td>

<td align="center" valign="center">
<img src="./images/Vehicle/<?php echo $array_slice[1]?>.jpg" alt="description here" />
<br />
<b>2. Vehicle Picture</b>
</td>

<td align="center" valign="center">
<img src="./images/Nature/<?php echo $array_slice[2]?>.jpg" alt="description here" />
<br />
<b>3. Nature Picture</b>
</td>

<td align="center" valign="center">
<img src="./images/Monuments/<?php echo $array_slice[3]?>.jpg" alt="description here" />
<br />
<b>4. Monumet Picture</b>
</td>

</tr>
</table>
<table width="500" border="0" cellpadding="5">
<tr>

<td align="center" valign="center">
<img src="./images/Superhero/<?php echo $array_slice[4]?>.jpg" alt="description here" />
<br />
<b>5. Superhero Picture</b>
</td>

<td align="center" valign="center">
<img src="./images/Emoji/<?php echo $array_slice[5]?>.jpg" alt="description here" />
<br />
<b>6. Emoji Picture</b>
</td>

<td align="center" valign="center">
<img src="./images/Food/<?php echo $array_slice[6]?>.jpg" alt="description here" />
<br />
<b>7. Food Picture</b>
</td>


</table>
 <br>
 <br>
 <br>
 <br>

<a href="./password_finder.php"><input type="Submit" id="submt_button" class="btn" name="next" value= "Find Another Password?" onclick=""></a>

</body>

  </html>

