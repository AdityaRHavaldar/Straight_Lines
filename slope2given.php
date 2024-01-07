
<!DOCTYPE html>
<html>

<head>
    <title>HTML class</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style type="text/css">
        .ani {
            text-transform: uppercase;
            background-image: linear-gradient(-225deg,
                    orange 0%,
                    white 35%,
                    blue 60%,
                    green 100%);
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
            margin-bottom: 70px;
            margin-left: 500px;
            
            margin-right: 500px;
            z-index: 1;
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
            min-height: 550px;
            border-width: 2px;
            border-color: white;
            border-style: dashed;
            position: relative;
            margin-left: 10px;
            background-color: #202020;
            margin-bottom: 50px;
            margin-top: -70px;
        }

        .dss {
            margin-left: 30px;

            text-align: center;
            margin-top: 0px;
            width: 45.33%;
        }




        .nikil {
            margin: 0;
            padding: 0;
            width: 150%;
            height: 7vh;
            display: flex;
            flex-direction: row;

            margin-bottom: 50px;
            background: #202020;
            margin-left: 80px;
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
    <h1 class="ani" style="text-align: center;position: relative; bottom:40px;">SLOPE OF THE LINE </h1>

    
        <div class="column">
            <a href="index.php" style="margin-left: 675px;font-size: 15px;margin-top:600px;color: orange">HOME</a>

            <div class="dss">
                <label>ENTER THE VALUE OF X1 </label>
                <input type="number" name="x1" maxlength="3" id="x1" autofocus="on" style=" width: 75px;height: 30px;"><br><br><br>
                <label>ENTER THE VALUE OF Y1</label>
                <input type="number" name="y1" maxlength="3" id="y1" style=" width: 75px;height: 30px;"><br><br><br>
                <label>ENTER THE VALUE OF X2 </label>
                <input type="number" name="x2" maxlength="3" id="x2" style=" width: 75px;height: 30px;"><br><br><br>
                <label>ENTER THE VALUE OF Y2 </label>
                <input type="number" name="y2" maxlength="3" id="y2" style=" width: 75px;height: 30px;"><br><br><br>

                <div class="nikil">
                    <button class="glow-on-hover" onclick="tslope();draw();" id="slpp" name="submit" type="submit">CALCULATE</button>&nbsp&nbsp&nbsp&nbsp&nbsp <a href="slope2given.php"><button class="glow-on-hover" type="reset" id="dist" onclick="reset">RESET</button></a>
                </div>
                <label style="font-size: 20px;color: orange;">SLOPE OF THE POINTS</label>
                <input type="text" name="slope" id="slp" maxlength="3" style=" width: 100px;height: 30px;"readonly>
            </div>
            <br><label style="font-size: 20px;color: gold;"><b>FORMULAE:- m=(y2-y1)/(x2-x1)<br></b></label>



        
    </div>
    <div class="column" style="background-color: white;color: black"><canvas width="605" height="510" id="myCanvas"style="background-image: url(images/ghr.png);"></canvas><br /><br /></div>

    <script type="text/javascript">
        var x1, x2, y1, y2, c;

        function tslope() {
            x1 = (document.getElementById("x1").value);
            y1 = (document.getElementById("y1").value);
            x2 = (document.getElementById("x2").value);
            y2 = (document.getElementById("y2").value);
            if(x1== "" || y1 =="" || x2 == "" || y2 == "")
            {
                alert("can't be empty")
            }
            else{
            var a =parseInt(y2) - parseInt (y1)
            var b =parseInt (x2) -parseInt (x1)
            c = a / b

            document.getElementById("slp").value = c;
            }}
        var canvas = document.getElementById('myCanvas');
        var context = canvas.getContext('2d');

        function draw() {
            var x1 = document.getElementById("x1").value * 20;
            var y1 = document.getElementById("y1").value * 20;
            var x2 = document.getElementById("x2").value * 20;
            var y2 = document.getElementById("y2").value * 20;
            context.beginPath();
            context.strokeStyle = "black";
            context.lineWidth = 4;
            context.moveTo(x1, y1);
            context.lineTo(x2, y2);
            context.stroke();
        }

        $(document).ready(function() {
            $("#slpp").click(function() {
                var data = 'x1=' + x1 + '&x2=' + x2 + '&y1=' + y1 + '&y2=' + y2 + '&slope=' + c;

                $.ajax({
                    type: "POST",
                    url: "slope2senddata.php",
                    data: data,
                    cache: false,
                    success: function(result) {
                        // alert("inserted..!");
                        // console.log(data);
                    }
                });
            });
        });
    </script>



</body>







</html>