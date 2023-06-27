<?php
session_start();
$_SESSION["username"] = ucfirst($_POST["username"]);
$test_uname = $_SESSION["username"];
?>

<!DOCTYPE html>
<html>

<head>
  <script type="text/javascript" src="./jQuery v3.4.1.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./login_Page_new.css">
  <script>
    var imgselect;
    var username;
    var uname = "<?= $_SESSION["username"] ?>";

    function image_selection(imageid) 
    {
      imgselect = imageid;
      var test1 = document.getElementsByClassName("img_seleted");
        for (var i = 0; i<test1.length; i++)
          {
            test1[i].classList.remove("img_seleted");
          }
          var test = document.getElementById(imgselect);
          test.classList.add("img_seleted");
    }

function test()
{
if(imgselect == null)
{
alert("sadf");
event.preventDefault();
<?php $lnk = "" ?>
}
else{
next();
<?php $lnk = "./test_1_login.php"?>
}
}



  function next() {

$.ajax({
        type: 'POST',
        url: 'read_json_login.php',
        data: {          
          img: imgselect,
          username: uname,
        },
        dataType: 'json',
      });
    }
  </script>
</head>
<?php
$link = mysqli_connect("localhost", "root", "K1dzteam!", "PassFace");
$result = mysqli_query($link , "SELECT p1 FROM credentials WHERE uname = '$test_uname'");
function UniqueRandomNumbersWithinRange($min = 1, $max = 65, $quantity = 16, $chk="") {
    $num = array();
    $numbers = range($min, $max);
    shuffle($numbers);
    while(sizeof($num)!=$quantity){
      $k = array_pop($numbers);
      if( $k != $chk){
            array_push($num,$k);   
      }
      shuffle($numbers);
    }
    return $num;
}
 if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_row($result);  
  }
  $arr= (UniqueRandomNumbersWithinRange(1,65,15, $row[0]));
  array_push($arr, $row[0]);
  shuffle($arr);
?>
<body>
  <div>
    <div class="h1" style="font-size:15px;" align="center">
      <h1> <span class="username"><span> <?php echo $_SESSION["username"]; ?></span>, please select first picture! (1/4)</h1>
    </div>
    <div class="row" align="center">
      <div class="column" align="center">
        <img src="./images/<?php echo $arr[0]?>.jpg"  style="width:15%" onclick="image_selection(this.id)" id="<?php echo $arr[0]?>"/>
        <img src="./images/<?php echo $arr[1]?>.jpg"  style="width:15%" onclick="image_selection(this.id)" id="<?php echo $arr[1]?>"/>
        <img src="./images/<?php echo $arr[2]?>.jpg"  style="width:15%" onclick="image_selection(this.id)" id="<?php echo $arr[2]?>"/>
        <img src="./images/<?php echo $arr[3]?>.jpg"  style="width:15%" onclick="image_selection(this.id)" id="<?php echo $arr[3]?>"/>
<br>
        <img src="./images/<?php echo $arr[4]?>.jpg"  style="width:15%" onclick="image_selection(this.id)" id="<?php echo $arr[4]?>"/>
        <img src="./images/<?php echo $arr[5]?>.jpg"  style="width:15%" onclick="image_selection(this.id)" id="<?php echo $arr[5]?>"/>
        <img src="./images/<?php echo $arr[6]?>.jpg"  style="width:15%" onclick="image_selection(this.id)" id="<?php echo $arr[6]?>"/>
        <img src="./images/<?php echo $arr[7]?>.jpg"  style="width:15%" onclick="image_selection(this.id)" id="<?php echo $arr[7]?>"/>
<br>
        <img src="./images/<?php echo $arr[8]?>.jpg"  style="width:15%" onclick="image_selection(this.id)" id="<?php echo $arr[8]?>"/>
        <img src="./images/<?php echo $arr[9]?>.jpg"  style="width:15%" onclick="image_selection(this.id)" id="<?php echo $arr[9]?>"/>
        <img src="./images/<?php echo $arr[10]?>.jpg"  style="width:15%" onclick="image_selection(this.id)" id="<?php echo $arr[10]?>"/>
        <img src="./images/<?php echo $arr[11]?>.jpg"  style="width:15%" onclick="image_selection(this.id)" id="<?php echo $arr[11]?>"/>
<br>
       
        <img src="./images/<?php echo $arr[12]?>.jpg"  style="width:15%" onclick="image_selection(this.id)" id="<?php echo $arr[12]?>"/>
        <img src="./images/<?php echo $arr[13]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $arr[13]?>"/>
        <img src="./images/<?php echo $arr[14]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $arr[14]?>"/>
        <img src="./images/<?php echo $arr[15]?>.jpg"  style="width:15%" onclick="image_selection(this.id)" id="<?php echo $arr[15]?>"/>

      </div>
    </div>
    <div align="center">
      <a href='<?php echo $lnk?>'><button name="button_next" class="btn" type="button" onclick="test()">Next</button></a>
    </div>
</body>
</html>
