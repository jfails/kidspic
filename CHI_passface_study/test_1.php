<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <script type="text/javascript" src="./jQuery v3.4.1.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="login_Page_new.css">
  <!--script src="test.js"></script-->
  <script>
    var imgselect;
    var username;
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

function test()
{
if(imgselect == null)
{
alert("Please select your picture!");
event.preventDefault();
<?php $lnk = "" ?>
}
else{
next();
<?php $lnk = "./test_2.php"?>
}
}


    function next() {
      $.ajax({
        type: 'POST',
        url: 'read_json_one.php',
        data: {
          img: imgselect,
          username: uname
        },
        dataType: 'json',
      });
    }
  </script>
</head>
<?php
$path = array();
  function UniqueRandomNumbersWithinRange($min = 1, $max = 65, $quantity = 49) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}
 $array_slice = (UniqueRandomNumbersWithinRange(1,65,49));
?>

<body>
  <div class="h1" align="center">
    <h1>Please choose your second picture! (2/4)</h1>
  </div>
  <div class="row" align="center">
  <div class="column" align="center">
        <!-- In a grid (first row, the both array_slice should be unique, and width, # of columns are corelated. ie,  12% W=8C and 13% W=7C)-->
        <img src="./images/<?php echo $array_slice[0]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[0]?>"/>
        <img src="./images/<?php echo $array_slice[1]?>.jpg"style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[1]?>"/>
        <img src="./images/<?php echo $array_slice[2]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[2]?>"/>
        <img src="./images/<?php echo $array_slice[3]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[3]?>"/>
        <img src="./images/<?php echo $array_slice[4]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[4]?>"/>
        <img src="./images/<?php echo $array_slice[5]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[5]?>"/>
        <img src="./images/<?php echo $array_slice[6]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[6]?>"/>
        <br>
        <img src="./images/<?php echo $array_slice[7]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[7]?>"/>
        <img src="./images/<?php echo $array_slice[8]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[8]?>"/>
        <img src="./images/<?php echo $array_slice[9]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[9]?>"/>
        <img src="./images/<?php echo $array_slice[10]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[10]?>"/>
        <img src="./images/<?php echo $array_slice[11]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[11]?>"/>
        <img src="./images/<?php echo $array_slice[12]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[12]?>"/>
        <img src="./images/<?php echo $array_slice[13]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[13]?>"/>
        <br>
        <img src="./images/<?php echo $array_slice[14]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[14]?>"/>
        <img src="./images/<?php echo $array_slice[15]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[15]?>"/>
        <img src="./images/<?php echo $array_slice[16]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[16]?>"/>
        <img src="./images/<?php echo $array_slice[17]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[17]?>"/>
        <img src="./images/<?php echo $array_slice[18]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[18]?>"/>
        <img src="./images/<?php echo $array_slice[19]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[19]?>"/>
        <img src="./images/<?php echo $array_slice[20]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[20]?>"/>
        <br>
        <img src="./images/<?php echo $array_slice[21]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[21]?>"/>
        <img src="./images/<?php echo $array_slice[22]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[22]?>"/>
        <img src="./images/<?php echo $array_slice[23]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[23]?>"/>
        <img src="./images/<?php echo $array_slice[24]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[24]?>"/>
        <img src="./images/<?php echo $array_slice[25]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[25]?>"/>
        <img src="./images/<?php echo $array_slice[26]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[26]?>"/>
        <img src="./images/<?php echo $array_slice[27]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[27]?>"/>
        <br>
        <img src="./images/<?php echo $array_slice[28]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[28]?>"/>
        <img src="./images/<?php echo $array_slice[29]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[29]?>"/>
        <img src="./images/<?php echo $array_slice[30]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[30]?>"/>
        <img src="./images/<?php echo $array_slice[31]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[31]?>"/>
        <img src="./images/<?php echo $array_slice[32]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[32]?>"/>
        <img src="./images/<?php echo $array_slice[33]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[33]?>"/>
        <img src="./images/<?php echo $array_slice[34]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[34]?>"/>
 <br>
        <img src="./images/<?php echo $array_slice[35]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[35]?>"/>
        <img src="./images/<?php echo $array_slice[36]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[36]?>"/>
        <img src="./images/<?php echo $array_slice[37]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[37]?>"/>
        <img src="./images/<?php echo $array_slice[38]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[38]?>"/>
        <img src="./images/<?php echo $array_slice[39]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[39]?>"/> 
        <img src="./images/<?php echo $array_slice[40]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[40]?>"/>
        <img src="./images/<?php echo $array_slice[41]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[41]?>"/>
<br>
        <img src="./images/<?php echo $array_slice[42]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[42]?>"/>
        <img src="./images/<?php echo $array_slice[43]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[43]?>"/>
        <img src="./images/<?php echo $array_slice[44]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[44]?>"/>
        <img src="./images/<?php echo $array_slice[45]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[45]?>"/>
        <img src="./images/<?php echo $array_slice[46]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[46]?>"/>
        <img src="./images/<?php echo $array_slice[47]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[47]?>"/>
        <img src="./images/<?php echo $array_slice[48]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[48]?>"/>
         </div>
    </div>
  <div align="center">    <a href='<?php echo $lnk?>'><button name="button_next" class="btn" type="button" onclick="test()">Next</button></a>
  </div>
</body>
