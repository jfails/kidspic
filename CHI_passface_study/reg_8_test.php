<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--
      <script type="text/javascript">
$(window).load(function(){
$('.pic').mousemove(function (event) {
    event.preventDefault();
    var upX = event.clientX;
    var upY = event.clientY;
    var mask = $('#mask3 circle')[0];
    mask.setAttribute("cy", (upY - 5) + 'px');
    mask.setAttribute("cx", (upX - 180) + 'px');
});

$('.pic1').mousemove(function (event) {
    event.preventDefault();
    var upX = event.clientX;
    var upY = event.clientY;
    var mask = $('#mask25 circle')[0];
    mask.setAttribute("cy", (upY - 5)+'px');
    mask.setAttribute("cx", (upX - 180) + 'px');
});

$('.pic2').mousemove(function (event) {
    event.preventDefault();
    var upX = event.clientX;
    var upY = event.clientY;
    var mask = $('#mask26 circle')[0];
    mask.setAttribute("cy", (upY - 5)+'px');
    mask.setAttribute("cx", (upX - 70) + 'px');
});

$('.pic3').mousemove(function (event) {
    event.preventDefault();
    var upX = event.clientX;
    var upY = event.clientY;
    var mask = $('#mask27 circle')[0];
    mask.setAttribute("cy", (upY - 5)+'px');
    mask.setAttribute("cx", (upX - 180) + 'px');
});

$('.pic4').mousemove(function (event) {
    event.preventDefault();
    var upX = event.clientX;
    var upY = event.clientY;
    var mask = $('#mask28 circle')[0];
    mask.setAttribute("cy", (upY - 5)+'px');
    mask.setAttribute("cx", (upX - 180) + 'px');
});

$('.pic5').mousemove(function (event) {
    event.preventDefault();
    var upX = event.clientX;
    var upY = event.clientY;
    var mask = $('#mask29 circle')[0];
    mask.setAttribute("cy", (upY - 5)+'px');
    mask.setAttribute("cx", (upX - 180) + 'px');
});

$('.pic6').mousemove(function (event) {
    event.preventDefault();
    var upX = event.clientX;
    var upY = event.clientY;
    var mask = $('#mask30 circle')[0];
    mask.setAttribute("cy", (upY - 5)+'px');
    mask.setAttribute("cx", (upX - 180) + 'px');
});});
</script>
--!>
<script type="text/javascript">
var myX, myY, xyOn, myMouseX, myMouseY;
xyOn = true;
function getXYPosition(e){
myMouseX=(e||event).clientX;
myMouseY=(e||event).clientY;
if (document.documentElement.scrollTop > 0) {
myMouseY = myMouseY + document.documentElement.scrollTop;
}
if (xyOn) {
alert("X is " + myMouseX + "\nY is " + myMouseY);
}
}
function toggleXY() {
xyOn = !xyOn;
document.getElementById('xyLink').blur();
return false;
}
</script>

<style>
         body {
    margin: 0;
}
.pic {
    text-align: center;
    position: relative;
    height: 250px;
}
.blur {
    height: 100%;
}
.overlay {
    position: absolute;
    top: 0px;
    left: 0px;
    height: 100%;
}
      </style>
<body>

    <head>
        <link rel="stylesheet" type="text/css" href="login_Page_new.css">
    </head>
    <br><br><br><br><br><br><br><br><br><br><br>
    <h1 class="h1"><?php echo $_SESSION["username"]; ?>, you are sucessfully registered!</h1>
<?php 
	$username = $_SESSION["username"];
	$sql ="SELECT p1,p2,p3,p4,p5,p6,p7 FROM reg_108_credentials WHERE uname = '$username'";
	$link = mysqli_connect("localhost", "root", "K1dzteam!", "PassFace");

$result = mysqli_query($link, $sql);
$array_slice = mysqli_fetch_row($result);
$string_from_array = implode("-", $res);

?>
<center>
  <span class="pic" style="width: 200px; height: 300px;"> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200" height="300" id="blurred3">
    <image width="200" height="300" xlink:href="./images/Animal/<?php echo $array_slice[0]?>.jpg" filter="url(#blur3)"></image>
    <filter id="blur3">
      <feGaussianBlur stdDeviation="20"></feGaussianBlur>
    </filter>
    <mask id="mask3">
      <circle id="circle3" filter="url(#blur3)" cx=myMouseX cy=myMouseY r="20" fill="white"></circle>
    </mask>
    <image width="200" height="300" xlink:href="./images/Animal/<?php echo $array_slice[0]?>.jpg" mask="url(#mask3)"></image>
  </svg></span>

<span class="pic1" style="width: 200px; height: 300px;"> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200" height="300" id="blurred25">
    <image width="200" height="300" xlink:href="./images/Vehicle/<?php echo $array_slice[1]?>.jpg" filter="url(#blur25)"></image>
    <filter id="blur25">
      <feGaussianBlur stdDeviation="20"></feGaussianBlur>
    </filter>
    <mask id="mask25">
      <circle id="circle25" filter="url(#blur25)" cx="870px" cy="444px" r="20" fill="white"></circle>
    </mask>
    <image width="200" height="300" xlink:href="./images/Vehicle/<?php echo $array_slice[1]?>.jpg" mask="url(#mask25)"></image>
  </svg></span>

  <span class="pic2" style="width: 200px; height: 300px;"> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200" height="300" id="blurred26">
    <image width="200" height="300" xlink:href="./images/Nature/<?php echo $array_slice[2]?>.jpg" filter="url(#blur26)"></image>
    <filter id="blur26">
      <feGaussianBlur stdDeviation="20"></feGaussianBlur>
    </filter>
    <mask id="mask26">
      <circle id="circle25" filter="url(#blur26)" cx="870px" cy="444px" r="20" fill="white"></circle>
    </mask>
    <image width="200" height="300" xlink:href="./images/Nature/<?php echo $array_slice[2]?>.jpg" mask="url(#mask26)"></image>
  </svg></span>
<br>
<span class="pic3" style="width: 200px; height: 300px;"> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200" height="300" id="blurred27">
    <image width="200" height="300" xlink:href="./images/Monuments/<?php echo $array_slice[3]?>.jpg" filter="url(#blur27)"></image>
    <filter id="blur27">
      <feGaussianBlur stdDeviation="20"></feGaussianBlur>
    </filter>
    <mask id="mask27">
      <circle id="circle25" filter="url(#blur27)" cx="870px" cy="444px" r="20" fill="white"></circle>
    </mask>
    <image width="200" height="300" xlink:href="./images/Monuments/<?php echo $array_slice[3]?>.jpg" mask="url(#mask27)"></image>
  </svg></span>

  <span class="pic4" style="width: 200px; height: 300px;"> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200" height="300" id="blurred28">
    <image width="200" height="300" xlink:href="./images/Superhero/<?php echo $array_slice[4]?>.jpg" filter="url(#blur28)"></image>
    <filter id="blur28">
      <feGaussianBlur stdDeviation="20"></feGaussianBlur>
    </filter>
    <mask id="mask28">
      <circle id="circle25" filter="url(#blur28)" cx="870px" cy="444px" r="20" fill="white"></circle>
    </mask>
    <image width="200" height="300" xlink:href="./images/Superhero/<?php echo $array_slice[4]?>.jpg" mask="url(#mask28)"></image>
  </svg></span>

  <span class="pic5" style="width: 200px; height: 300px;"> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200" height="300" id="blurred29">
    <image width="200" height="300" xlink:href="./images/Emoji/<?php echo $array_slice[5]?>.jpg" filter="url(#blur29)"></image>
    <filter id="blur29">
      <feGaussianBlur stdDeviation="20"></feGaussianBlur>
    </filter>
    <mask id="mask29">
      <circle id="circle25" filter="url(#blur29)" cx="870px" cy="444px" r="20" fill="white"></circle>
    </mask>
    <image width="200" height="300" xlink:href="./images/Emoji/<?php echo $array_slice[5]?>.jpg" mask="url(#mask29)"></image>
  </svg></span>

  <span class="pic6" style="width: 200px; height: 300px;"> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="200" height="300" id="blurred30">
    <image width="200" height="300" xlink:href="./images/Food/<?php echo $array_slice[6]?>.jpg" filter="url(#blur30)"></image>
    <filter id="blur30">
      <feGaussianBlur stdDeviation="20"></feGaussianBlur>
    </filter>
    <mask id="mask30">
      <circle id="circle25" filter="url(#blur30)" cx="870px" cy="444px" r="20" fill="white"></circle>
    </mask>
    <image width="200" height="300" xlink:href="./images/Food/<?php echo $array_slice[6]?>.jpg" mask="url(#mask30)"></image>
  </svg></span>
        <!--img src="./images/Food/<?php echo $array_slice[6]?>.jpg" style="width:15%"  id="<?php echo $array_slice[6]?>"/>-->
 <br>
 <br>

    <a href='./log.php'><button name="button_next" class="btn" type="button">Home</button></a>
<br>
    </form>
<script type="text/javascript">
$(window).on('load', function(){
$('.pic').mousemove(function (event) {
    event.preventDefault();
    var upX = event.clientX;
    var upY = event.clientY;
    var mask = $('#mask3 circle')[0];
    mask.setAttribute("cy", (upY - 20) + 'px');
    mask.setAttribute("cx", (upX - 300) + 'px');
});

$('.pic1').mousemove(function (event) {
    event.preventDefault();
    var upX = event.clientX;
    var upY = event.clientY;
    var mask = $('#mask25 circle')[0];
    mask.setAttribute("cy", (upY - 80)+'px');
    mask.setAttribute("cx", (upX - 500) + 'px');
});

$('.pic2').mousemove(function (event) {
    event.preventDefault();
    var upX = event.clientX;
    var upY = event.clientY;
    var mask = $('#mask26 circle')[0];
    mask.setAttribute("cy", (upY - 50)+'px');
    mask.setAttribute("cx", (upX - 720) + 'px');
});

$('.pic3').mousemove(function (event) {
    event.preventDefault();
    var upX = event.clientX;
    var upY = event.clientY;
    var mask = $('#mask27 circle')[0];
    mask.setAttribute("cy", (upY - 5)+'px');
    mask.setAttribute("cx", (upX-180) + 'px');
});

$('.pic4').mousemove(function (event) {
    event.preventDefault();
    var upX = event.clientX;
    var upY = event.clientY;
    var mask = $('#mask28 circle')[0];
    mask.setAttribute("cy", (upY - 5)+'px');
    mask.setAttribute("cx", (upX-420) + 'px');
});

$('.pic5').mousemove(function (event) {
    event.preventDefault();
    var upX = event.clientX;
    var upY = event.clientY;
    var mask = $('#mask29 circle')[0];
    mask.setAttribute("cy", (upY - 15)+'px');
    mask.setAttribute("cx", (upX - 600) + 'px');
});

$('.pic6').mousemove(function (event) {
    event.preventDefault();
    var upX = event.clientX;
    var upY = event.clientY;
    var mask = $('#mask30 circle')[0];
    mask.setAttribute("cy", (upY - 10)+'px');
    mask.setAttribute("cx", (upX - 750) + 'px');
});});
</script>
</body>

  </html>


