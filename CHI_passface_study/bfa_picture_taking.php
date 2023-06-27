<?php
session_start();
    $_SESSION["test_imgs"] = $_POST["data"];
    ?>

<!doctype html>
<script type="text/javascript" src="./jQuery v3.4.1.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="login_Page_new.css">
<head>
    <style>
    /* CSS comes here */
    #video {
        border: 1px solid black;
        width: 320px;
        height: 240px;
    }

    #photo {
        border: 1px solid black;
        width: 320px;
        height: 240px;
    }

    #canvas {
        display: none;
    }

    .camera {
        width: 340px;
        display: inline-block;
    }

    .output {
        width: 340px;
        display: inline-block;
    }
    #startbutton {
        background-color: #152f52;
        border: none;
        width: 45%;
	color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
    }

    .contentarea {
        font-size: 16px;
        font-family: Arial;
        text-align: center;
    }
    </style>
    <title>Take a Picture!</title>
</head>

<body>
    <div class="contentarea">
        <h1>
            Please take a photo!
        </h1>
        <div class="camera">
            <video id="video">Video stream not available.</video>
	</div>
        <canvas id="canvas"></canvas>
        <div class="output">
            <img id="photo" alt="The screen capture will appear in this box.">

        </div>
<br><br> <br> <br> <br> <br> 
	<div class="center"><button id="startbutton">Capture a photo</button>
<br><br> <br>
	<div><button id="next" onclick="next()">Next</button></div>
    </div>
<script>
var data;
    /* JS comes here */
    (function() {

        var width = 320; // We will scale the photo width to this
        var height = 240; // This will be computed based on the input stream

        var streaming = false;

        var video = null;
        var canvas = null;
        var photo = null;
        var startbutton = null;

        function startup() {
            video = document.getElementById('video');
            canvas = document.getElementById('canvas');
            photo = document.getElementById('photo');
            startbutton = document.getElementById('startbutton');

            navigator.mediaDevices.getUserMedia({
                    video: true,
                    audio: false
                })
                .then(function(stream) {
                    video.srcObject = stream;
                    video.play();
                })
                .catch(function(err) {
                    console.log("An error occurred: " + err);
                });

            video.addEventListener('canplay', function(ev) {
		if (!streaming) {
                    height = video.videoHeight / (video.videoWidth / width);

                    if (isNaN(height)) {
                        height = width / (4 / 3);
                    }               

                    video.setAttribute('width', width);
                    video.setAttribute('height', height);
                    canvas.setAttribute('width', width);
                    canvas.setAttribute('height', height);
                    streaming = true;
                }
            }, false);

            startbutton.addEventListener('click', function(ev) {
                takepicture();
                ev.preventDefault();
            }, false);

            clearphoto();
        }


        function clearphoto() {
            var context = canvas.getContext('2d');
            context.fillStyle = "#AAA";
            context.fillRect(0, 0, canvas.width, canvas.height);

             data = canvas.toDataURL('image/png');
            photo.setAttribute('src', data);
        }

        function takepicture() {
            var context = canvas.getContext('2d'); 
           if (width && height) {
                canvas.width = width;
                canvas.height = height;
                context.drawImage(video, 0, 0,video.width, video.height);
               
		  data = canvas.toDataURL('image/png'); 			
                photo.setAttribute('src', data);
            	alert(data);
		} else {
                clearphoto();
            }
        }

        window.addEventListener('load', startup, false);
    })();

function next() {
    $.ajax({
           type: 'POST',
           url: 'bfa_picture_save.php',
           data: {
           img: data
           },
 success: function (data, textStatus, jqXHR)
        {
//        alert("Success");
          console.log("Next complete");
        },
  error: function (jqXHR, textStatus, errorThrown)
        {
   alert("Error");
        }

                     });
}
    </script>
</body>

</html>
