<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript" src="gaussian.js"></script>
      <script type="text/javascript">
         $(window).on('load', function(){
         	$('.blurImageContainer .blurImage').css({opacity: 0});
         	$('.blurImageContainer').gaussianBlur({
         		deviation: 20, //level of blur
         		imageClass: 'blurImage'	//class of the original image (just in case)	
         	});
         	
         	$('.blurImageContainer').hover(function(){
         		$('.blurImage', this).animate({opacity: 1}, 50);
         	},function(){
         		$('.blurImage', this).animate({opacity: 0}, 50);
         	});
                $('.blurImageContainer').click(function(){
                        $('.blurImage', this).animate({opacity: 1}, 100);
                },function(){
                        $('.blurImage', this).animate({opacity: 0}, 100);
                });

         	
         });
      </script>
      <style>
         .blurImageContainer {
         display: inline-block;
         position: relative;
         overflow: hidden;
         }
         .blurImageContainer > .blurImage {
         position: absolute;
         top: 0;
         left: 0;
         z-index: 1;
         }
         .blurImageContainer > [id^="blurred"] {
         position: absoulte;
         top:0;
         left:0;
         z-index:0;
         }
	div#root {
	margin:50px;
	text-align: center;
	}
	img{
	width: 100%;
	height: 100%;
	}
      
      </style>
<body>

    <head>
        <link rel="stylesheet" type="text/css" href="login_Page_new.css">
    </head>
    <br><br>
    <h1 class="h1"><?php echo $_SESSION["username"]; ?>, you are sucessfully registered!</h1>
<?php 
	$username = $_SESSION["username"];
	$sql ="SELECT p1,p2,p3,p4,p5,p6,p7 FROM reg_108_credentials WHERE uname = '$username'";
	$link = mysqli_connect("localhost", "root", "K1dzteam!", "PassFace");

$result = mysqli_query($link, $sql);
$array_slice = mysqli_fetch_row($result);
$string_from_array = implode("-", $res);

?>
  <div id="root">
<center>
  <span class="blurImageContainer"> <img class="blurImage" src="./images/Animal/<?php echo $array_slice[0]?>.jpg"  id="<?php echo $array_slice[0]?>"> </span> 
 <span class="blurImageContainer"> <img class="blurImage" src="./images/Vehicle/<?php echo $array_slice[1]?>.jpg"  id="<?php echo $array_slice[1]?>"> </span> 
  <span class="blurImageContainer"> <img class="blurImage" src="./images/Nature/<?php echo $array_slice[2]?>.jpg"  id="<?php echo $array_slice[2]?>"> </span>
<br>
<br>
<br>
  <span class="blurImageContainer"> <img class="blurImage" src="./images/Monuments/<?php echo $array_slice[3]?>.jpg"  id="<?php echo $array_slice[3]?>"> </span> 
  <span class="blurImageContainer"> <img class="blurImage" src="./images/Superhero/<?php echo $array_slice[4]?>.jpg" id="<?php echo $array_slice[4]?>"> </span>
  <span class="blurImageContainer"> <img class="blurImage" src="./images/Emoji/<?php echo $array_slice[5]?>.jpg"  id="<?php echo $array_slice[5]?>"> </span>
  <span class="blurImageContainer"> <img class="blurImage" src="./images/Food/<?php echo $array_slice[6]?>.jpg"  id="<?php echo $array_slice[6]?>"> </span>
  </div>
        <!--img src="./images/Food/<?php echo $array_slice[6]?>.jpg" style="width:15%"  id="<?php echo $array_slice[6]?>"/>-->
    <a href='./log.php'><button name="button_next" class="btn" type="button">Home</button></a>
    </form>
</body>

  </html>

