<?php
session_start();
$_SESSION["username"] = ucfirst($_POST["username"]);
$_SESSION["firstname"] = $_POST["firstname"];
$_SESSION["lastname"] = $_POST["lastname"];
$test_uname = $_SESSION["username"];

?>

<!DOCTYPE html>
<html>

<head>
  <script type="text/javascript" src="./jQuery v3.4.1.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="login_Page_new.css">
  <script>
    var imgselect;
    var username;
    var firstname;
    var lastname;
    var fname = "<?= $_SESSION["firstname"] ?>";
    var lname = "<?= $_SESSION["lastname"] ?>";;
    var uname = "<?= $_SESSION["username"] ?>";
    function image_selection(imageid) {
      imgselect = imageid;
      var test1 = document.getElementsByClassName("img_seleted");

      for (var i = 0; i<test1.length; i++)
      {
        test1[i].classList.remove("img_seleted");
      }
      var test = document.getElementById(imgselect);
      test.classList.add("img_seleted");
    }
    function next() {
      $.ajax({
        type: 'POST',
        url: 'read_json.php',
        data: {
          img: imgselect,
          username: uname,
          firstname: fname,
          lastname: lname,
        },
        dataType: 'json',
      });
    }
  </script>
</head>
<?php
  function UniqueRandomNumbersWithinRange($min = 1, $max = 65, $quantity = 16) 
  {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
  }
 $array_slice = (UniqueRandomNumbersWithinRange(1,65 ,16));
?>

<body>
  <div>
    <div class="h1" style="font-size:15px;" align="center">
      <h1> <span class="username"><?php echo $_SESSION["username"]; ?>, please choose your first picture! (1/4)</h1>
    </div>
    <div class="row" align="center">
      <div class="column" align="center">
        
        <img src="./images/<?php echo $array_slice[0]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[0]?>"/>
        <img src="./images/<?php echo $array_slice[1]?>.jpg"style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[1]?>"/>
        <img src="./images/<?php echo $array_slice[2]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[2]?>"/>
        <img src="./images/<?php echo $array_slice[3]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[3]?>"/>
        <img src="./images/<?php echo $array_slice[0]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[0]?>"/>
        <img src="./images/<?php echo $array_slice[1]?>.jpg"style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[1]?>"/>
        <img src="./images/<?php echo $array_slice[2]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[2]?>"/>
        <img src="./images/<?php echo $array_slice[3]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[3]?>"/>
        <br>
        <img src="./images/<?php echo $array_slice[4]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[4]?>"/>
        <img src="./images/<?php echo $array_slice[5]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[5]?>"/>
        <img src="./images/<?php echo $array_slice[6]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[6]?>"/>
        <img src="./images/<?php echo $array_slice[7]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[7]?>"/>
        <img src="./images/<?php echo $array_slice[4]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[4]?>"/>
        <img src="./images/<?php echo $array_slice[5]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[5]?>"/>
        <img src="./images/<?php echo $array_slice[6]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[6]?>"/>
        <img src="./images/<?php echo $array_slice[7]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[7]?>"/>
        <br>
        <img src="./images/<?php echo $array_slice[8]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[8]?>"/>
        <img src="./images/<?php echo $array_slice[9]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[9]?>"/>
        <img src="./images/<?php echo $array_slice[10]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[10]?>"/>
        <img src="./images/<?php echo $array_slice[11]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[11]?>"/>
        <img src="./images/<?php echo $array_slice[8]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[8]?>"/>
        <img src="./images/<?php echo $array_slice[9]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[9]?>"/>
        <img src="./images/<?php echo $array_slice[10]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[10]?>"/>
        <img src="./images/<?php echo $array_slice[11]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[11]?>"/>        
<br>
        <img src="./images/<?php echo $array_slice[12]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[12]?>"/>
        <img src="./images/<?php echo $array_slice[13]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[13]?>"/>
        <img src="./images/<?php echo $array_slice[14]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[14]?>"/>
        <img src="./images/<?php echo $array_slice[15]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[15]?>"/>
       <img src="./images/<?php echo $array_slice[12]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[12]?>"/>
        <img src="./images/<?php echo $array_slice[13]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[13]?>"/>
        <img src="./images/<?php echo $array_slice[14]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[14]?>"/>
        <img src="./images/<?php echo $array_slice[15]?>.jpg" style="width:15%" onclick="image_selection(this.id)" id="<?php echo $array_slice[15]?>"/>     
 </div>
    </div>
    <div align="center">
      <a href='./test_1.php'><button name="button_next" class="btn" type="button" onclick="next()">Next</button></a>
    </div>
</body>

</html>
