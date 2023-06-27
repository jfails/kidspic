<link rel="stylesheet" type="text/css" href="login_Page_new.css">
<center><h1>Selfie Pictures of <?php echo $_POST["username"]; ?>!</h1>
<?php
$_SESSION["username"] = $_POST["username"];

$uname = $_POST["username"];
$link = mysqli_connect("localhost", "root", "K1dzteam!", "PassFace");
$sql = "SELECT picture,time_date FROM PassFace.picture_store WHERE user_name = '$uname'";
$result = mysqli_query($link,$sql);
$alldata=array();
while($data = mysqli_fetch_array($result))
{
  array_push($alldata, $data);
}
for($i=sizeof($alldata)-1;$i>(sizeof($alldata)-6);$i--)
{
	?>
<style>
div.item {
    border-top: 100px solid white;
    padding: 20px;
    vertical-align: top;
    display: inline-block;
    text-align: center;
    width: 120px;
    align-items: center;
justify-content: center;
}
img {
    padding: 20px;
    width: 100px;
    height: 100px;
    background-color: grey;
}
.caption {
    display: block;
}
</style>
<div class="item">
    <img src="<?php echo $alldata[$i]['picture']; ?>" width="100" height="100">
    <span class="caption"><?php echo $alldata[$i]['time_date']; ?></span>
</div>
<?php
} 
?>
</br>

<a href='./log.php'><button name="button_next" class="btn" type="button">Home</button></a>
</br>
</br>
</br>
<a href="./reg.php">Reset your password?</a>
