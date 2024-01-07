<?php

//database connection
$con = mysqli_connect('localhost', 'root', '', 'test') or die("Connection Error: " . mysqli_error($con));

    $x1 =  $_POST['x1'];
    $y1 =  $_POST['y1'];
    $x2 =  $_POST['x2'];
    $y2 =  $_POST['y2'];
    $distance =  $_POST['distance'];

    $query = "INSERT INTO `distanceb_w`(`x1`, `y1`, `x2`, `y2`,`distance`) VALUES ('$x1','$y1','$x2','$y2','$distance')";
    $insert = mysqli_query($con, $query);
    if ($insert) { ?>
        <script>
            // alert("data inserted");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Oops! Something went wrong while submitting ..!")
        </script>
<?php }


mysqli_close($con);

?>

<!DOCTYPE html>
<html>

<head> 
    <title>Distance Between two points</title>
    <style type="text/css">
        .ani {
            text-transform: uppercase;
            background-image: linear-gradient(-225deg,
                    orange 0%,
                    green 29%,
                    hotpink 67%,
                    blue 100%);
            background-size: 200px;
            background-clip: border-box;
            background-size: 300% auto;
            color: #fff;
            background-clip: text;
            /* text-fill-color: transparent; */
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textclip 2s linear infinite;
            display: inline-block;
            font-size: 50px;
            margin-bottom: 20px;
        }

        @keyframes textclip {
            to {
                background-position: 100% center;
            }
        }

        .button {
            padding: 15px 25px;
            font-size: 24px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #04AA6D;
            border: none;
            border-radius: 15px;
            box-shadow: 10px 10px 5px rgb(136, 46, 240);
        }

        .button:hover {
            background-color: #3e8e41
        }

        .button:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);





        }

        .text6 {
            width: 300px;
        }

        .column {
            width: 48.33%;
            float: left;
            text-align: center;
            color: white;
            min-height: 480px;
            border-width: 2px;
            border-color: white;
            border-style: dashed;
            position: relative;
            margin-left: 10px;
            background-color: #202020;
            margin-bottom: 50px;
            margin-top: -30px;
        }

        .dss {
            margin-left: 30px;

            text-align: center;
            margin-top: 20px;
            margin-bottom: -30px;
            width: 49.33%;
            height: 434px;

        }




        .nikil {
            margin: 0;
            padding: 0;
            width: 150%;
            height: 7vh;
            color: white;
            display: flex;
            flex-direction: row;
            align-items: center;
            align-content: center;

            margin-bottom: 80px;
            background: #202020;
            margin-left: 0px;
            border-radius: 5px;
        }

        .glow-on-hover {
            width: 220px;
            height: 50px;
            border: none;
            outline: none;
            color: #fff;
            background: #111;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
        }

        .glow-on-hover:before {
            content: '';
            background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing 20s linear infinite;
            opacity: 0;
            transition: opacity .3s ease-in-out;
            border-radius: 10px;
        }

        .glow-on-hover:active {
            color: #000
        }

        .glow-on-hover:active:after {
            background: transparent;
        }

        .glow-on-hover:hover:before {
            opacity: 1;
        }

        .glow-on-hover:after {
            z-index: -1;
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: #111;
            left: 0;
            top: 0;
            border-radius: 10px;
        }

        .h2 {
            align-items: center;
            max-width: 100px;
            margin-top: 500px;
        }

        @keyframes glowing {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 400% 0;
            }

            100% {
                background-position: 0 0;
            }
        }

        input {
            font-size: 20px;
        }
    </style>


    </style>
</head>

<body style="background-color: rgba(0, 0, 0); ">
    <h1 class="ani" style="text-align: center;position: relative; bottom:40px; ">distance between two points</h1>

    <div >
        <div class="column">
            <a href="home page.php" style="margin-left: 565px;font-size: 15px; z-index:999;   margin-top:600px;color:orange">HOME</a>
            <div class="dss">

                <label>ENTER THE VALUE OF X1 </label>
                <input type="number" name="x1" id="first" maxlength="3" autofocus="on" style=" width: 75px;height: 30px;"><br><br><br>
                <label>ENTER THE VALUE OF Y1</label>
                <input type="number" name="y1" id="second" maxlength="3" style=" width: 75px;height: 30px;"><br><br><br>
                <label>ENTER THE VALUE OF X2 </label>
                <input type="number" name="x2" id="third" maxlength="3" style=" width: 75px;height: 30px;"><br><br><br>
                <label>ENTER THE VALUE OF Y2 </label>
                <input type="number" name="y2" id="fourth" maxlength="3" style=" width: 75px;height: 30px;"><br><br><br>

                <div class="nikil">
                    <button class="glow-on-hover" name="submit" id="dist" onclick="distance();draw();" style="color: white">CALCULATE</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <a href="distancebtw.php"><button class="glow-on-hover" type="reset" id="dist" onclick="reset">RESET</button></a>
                </div>

            </div>
            <label style="font-size: 20px;color: orange;"><b>DISTANCE BETWEEN TWO POINTS</b></label>
            <input type="text" name="distance" id="dis" style=" width: 200px;height: 30px ;margin-bottom: 30px;"><br>

            <label style="font-size: 20px;color: gold;"><b>FORMULAE:- d = √[( x 2 - x 1 )2 + ( y 2 - y 1 )2]<br></b></label>
        </div>
    </div>



    <div class="column" style="background-color: white;color: black"><canvas width="605" height="510" id="myCanvas" style="background-image: url(ghr.png); " ;></canvas><br /><br /></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">
        var x1, x2, y1, y2, distance;
        function distance() {
            x1 = parseInt(document.getElementById("first").value);
            y1 = parseInt(document.getElementById("second").value);
            x2 = parseInt(document.getElementById("third").value);
            y2 = parseInt(document.getElementById("fourth").value);
            //Distance between two points (D = sqrt((x2-x1)^2 + (y2-y1)^2))
            distance = Math.sqrt((x2-x1)^2 + (y2-y1)^2);
            document.getElementById("dis").value = distance;
        }
    </script>
    <script>
        var canvas = document.getElementById('myCanvas');
        var context = canvas.getContext('2d');

        function draw() {
            var x1 = document.getElementById("first").value * 20;
            var y1 = document.getElementById("second").value * 20;
            var x2 = document.getElementById("third").value * 20;
            var y2 = document.getElementById("fourth").value * 20;
            context.beginPath();
            context.strokeStyle = "black";
            context.lineWidth = 4;
            context.moveTo(x1, y1);
            context.lineTo(x2, y2);
            context.stroke();
        }


       
    </script>



</body>







</html>