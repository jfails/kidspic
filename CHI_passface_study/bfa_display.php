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
    <h1 class="h1"><?php echo $_SESSION["username"]; ?>, you are sucessfully registered!</h1>
<?php
        $username = $_SESSION["username"];
        $sql ="SELECT p1,p2,p3,p4,p5,p6 FROM reg_108_credentials WHERE uname = '$username'";
        $link = mysqli_connect("localhost", "root", "K1dzteam!", "PassFace");

$result = mysqli_query($link, $sql);
$array_slice = mysqli_fetch_row($result);
$string_from_array = implode("-", $res);

?>
    <center>

      <div class="row" align="center">
  <div class="column" align="center">
        <code>      1      </code>
        <code>      2      </code>
        <code>      3      </code>
        <!--code>      4      </code-->
    </div>
  <div class="column" align="center">
        <img src="./images/Animal/<?php echo $array_slice[0]?>.jpg" style="width:15%"  id="<?php echo $array_slice[0]?>"/>
        <img src="./images/Vehicle/<?php echo $array_slice[1]?>.jpg"style="width:15%"  id="<?php echo $array_slice[1]?>"/>
        <img src="./images/Nature/<?php echo $array_slice[2]?>.jpg" style="width:15%" id="<?php echo $array_slice[2]?>"/>
        <br>
  <div class="column" align="center">
        <code>      4      </code>
        <code>      5      </code>
        <code>      6      </code>
    </div>
        <img src="./images/Monuments/<?php echo $array_slice[3]?>.jpg" style="width:15%"  id="<?php echo $array_slice[3]?>"/>
        <img src="./images/Superhero/<?php echo $array_slice[4]?>.jpg" style="width:15%"  id="<?php echo $array_slice[4]?>"/>
	<img src="./images/Food/<?php echo $array_slice[5]?>.jpg" style="width:15%"  id="<?php echo $array_slice[5]?>"/>
 <br>
 <br>
 <br>
 <br>

    <a href='./log.php'><button name="button_next" class="btn" type="button">Home</button></a>
    </div>
</div>
</center>
    </form>
</body>

  </html>

