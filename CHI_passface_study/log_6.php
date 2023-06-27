<?php
session_start();
    $_SESSION["test_imgs"] = $_POST["imgselect"];
    echo $_SESSION["test_imgs"];
    ?>
<!DOCTYPE html>
<html>
<head>

<script type="text/javascript" src="./jQuery v3.4.1.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="login_Page_new.css">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
overflow: hidden;
border: 1px solid #ccc;
    background-color: #474f59 ;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
border: none;
outline: none;
cursor: pointer;
padding: 14px 16px;
transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: green;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: green;
}
.tablinks {
    background-color: blue;
color: white;
    float: left;
border: none;
outline: none;
cursor: pointer;
padding: 14px 16px;
    font-size: 17px;
width: 33.3%;
}

/* Style the tab content */
.tabcontent {
display: none;
padding: 6px 12px;
border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>
<body>
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
    }
}

function next() {
    $.ajax({
           type: 'POST',
           url: 'read_json_five_login.php',
           data: {
           img: imgselect,
           username: uname
           },
             success: function (data, textStatus, jqXHR)
        {
//        alert("Success");
          console.log("Next complete");
location.href = "log_7.php";
         // <?php $lnk = "./reg_2.php"?>
            //data - response from server
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
   alert("Error");
        }

           });
}


</script>
</head>
<?php
    $path = array();
    function UniqueRandomNumbersWithinRange($min = 1, $max = 108, $quantity = 108) {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $quantity);
    }
    $array_slice = (UniqueRandomNumbersWithinRange(1,108,108));
    ?>

<!--h2>Tabs</h2-->
<!--p>Please choose a picture from One or Two ot Three</p-->
<center><h1>Please select your sixth picture!(6/7)</h1></center>
<div class="tab">
<button class="tablinks" onclick="openCity(event, 'One')">Emojis</button>
<button class="tablinks" onclick="openCity(event, 'Two')">More Emojis</button>
<button class="tablinks" onclick="openCity(event, 'Three')">Even More Emojis</button>
</div>

<div id="One" class="tabcontent" style="display:block">
<!--h3>London</h3-->
<body>
<div class="h1" align="center">
<!--h1>Please choose your second picture! (2/4)</h1-->
</div>
<div class="row" align="center">
<div class="column" align="center">
<!-- In a grid (first row, the both array_slice should be unique, and width, # of columns are corelated. ie,  12% W=8C and 13% W=7C)-->
                <img src="./images/Emoji/<?php echo $array_slice[0]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[0]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[1]?>.jpg"style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[1]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[2]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[2]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[3]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[3]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[4]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[4]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[5]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[5]?>"/>
                
                <br>
                <img src="./images/Emoji/<?php echo $array_slice[6]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[6]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[7]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[7]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[8]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[8]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[9]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[9]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[10]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[10]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[11]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[11]?>"/>
                <br>
                
                <img src="./images/Emoji/<?php echo $array_slice[12]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[12]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[13]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[13]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[14]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[14]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[15]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[15]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[16]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[16]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[17]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[17]?>"/>
                
                <br>
                <img src="./images/Emoji/<?php echo $array_slice[18]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[18]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[19]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[19]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[20]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[20]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[21]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[21]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[22]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[22]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[23]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[23]?>"/>
                <br>
                
                <img src="./images/Emoji/<?php echo $array_slice[24]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[24]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[25]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[25]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[26]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[26]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[27]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[27]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[28]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[28]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[29]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[29]?>"/>
                <br>
                
                <img src="./images/Emoji/<?php echo $array_slice[30]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[30]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[31]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[31]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[32]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[32]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[33]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[33]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[34]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[34]?>"/>
                <img src="./images/Emoji/<?php echo $array_slice[35]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[35]?>"/>
                </div>
                </div>
                
                </div>
                
                <div id="Two" class="tabcontent">
                <!--h3>Paris</h3-->
                <body>
                <div class="h1" align="center">
                <!--h1>Please choose your second picture! (2/4)</h1-->
                </div>
                <div class="row" align="center">
                <div class="column" align="center">
                <!-- In a grid (first row, the both array_slice should be unique, and width, # of columns are corelated. ie,  12% W=8C and 13% W=7C)-->
                                
                                <img src="./images/Emoji/<?php echo $array_slice[36]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[36]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[37]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[37]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[38]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[38]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[39]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[39]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[40]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[40]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[41]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[41]?>"/>
                                <br>
                                <img src="./images/Emoji/<?php echo $array_slice[42]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[42]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[43]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[43]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[44]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[44]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[45]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[45]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[46]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[46]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[47]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[47]?>"/>
                                <br>
                                <img src="./images/Emoji/<?php echo $array_slice[48]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[48]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[49]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[49]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[50]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[50]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[51]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[51]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[52]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[52]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[53]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[53]?>"/>
                                <br>
                                <img src="./images/Emoji/<?php echo $array_slice[54]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[54]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[55]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[55]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[56]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[56]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[57]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[57]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[58]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[58]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[59]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[59]?>"/>
                                <br>
                                <img src="./images/Emoji/<?php echo $array_slice[60]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[60]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[61]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[61]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[62]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[62]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[63]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[63]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[64]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[64]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[65]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[65]?>"/>
                                <br>
                                <img src="./images/Emoji/<?php echo $array_slice[66]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[66]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[67]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[67]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[68]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[68]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[69]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[69]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[70]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[70]?>"/>
                                <img src="./images/Emoji/<?php echo $array_slice[71]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[71]?>"/>
                                </div>
                                </div>
                                
                                </div>
                                
                                <div id="Three" class="tabcontent">
                                <!--h3>Tokyo</h3-->
                                <body>
                                <div class="h1" align="center">
                                <!--h1>Please choose your second picture! (2/4)</h1-->
                                </div>
                                <div class="row" align="center">
                                <div class="column" align="center">
                                <!-- In a grid (first row, the both array_slice should be unique, and width, # of columns are corelated. ie,  12% W=8C and 13% W=7C)-->
                                                <img src="./images/Emoji/<?php echo $array_slice[72]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[72]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[73]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[73]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[74]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[74]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[75]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[75]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[76]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[76]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[77]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[77]?>"/>
                                                <br>
                                                <img src="./images/Emoji/<?php echo $array_slice[78]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[78]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[79]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[79]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[80]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[80]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[81]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[81]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[82]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[82]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[83]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[83]?>"/>
                                                <br>
                                                <img src="./images/Emoji/<?php echo $array_slice[84]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[84]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[85]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[85]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[86]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[86]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[87]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[87]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[88]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[88]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[89]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[89]?>"/>
                                                <br>
                                                <img src="./images/Emoji/<?php echo $array_slice[90]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[90]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[91]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[91]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[92]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[92]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[93]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[93]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[94]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[94]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[95]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[95]?>"/>
                                                <br>
                                                <img src="./images/Emoji/<?php echo $array_slice[96]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[96]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[97]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[97]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[98]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[98]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[99]?>.jpg"style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[99]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[100]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[100]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[101]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[101]?>"/>
                                                <br>
                                                <img src="./images/Emoji/<?php echo $array_slice[102]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[102]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[103]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[103]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[104]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[104]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[105]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[105]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[106]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[106]?>"/>
                                                <img src="./images/Emoji/<?php echo $array_slice[107]?>.jpg" style="width:13%" onclick="image_selection(this.id)" id="<?php echo $array_slice[107]?>"/>
                                                </div>
                                                </div>
                                                
                                                </div>
                                                
                                                <script>
                                                function openCity(evt, cityName) {
                                                var i, tabcontent, tablinks;
                                                tabcontent = document.getElementsByClassName("tabcontent");
                                                for (i = 0; i < tabcontent.length; i++) {
                                                tabcontent[i].style.display = "none";
                                                }
                                                tablinks = document.getElementsByClassName("tablinks");
                                                for (i = 0; i < tablinks.length; i++) {
                                                tablinks[i].className = tablinks[i].className.replace(" active", "");
                                                }
                                                document.getElementById(cityName).style.display = "block";
                                                evt.currentTarget.className += " active";
                                                }
                                                </script>
                                      <div align="center">    <a href="#"><button name="button_next" class="btn" type="button" onclick="test()">Next</button></a>
                                                </div>
                                                </body>
                                                </html>
                                                


