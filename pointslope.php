<!DOCTYPE html>
<html>

<head>
    <title>point slope form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style type="text/css">
        .ani {
            text-transform: uppercase;
            background-image: linear-gradient(-225deg,
                    #231557 0%,
                    yellow 29%,
                    #ff1361 67%,
                    #fff800 100%);
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
            margin-left: 500px;
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
            width: 49.33%;
            height: 434px;
        }

        .nikil {
            margin: 0;
            padding: 0;
            width: 150%;
            height: 7vh;
            color: #202020;
            display: flex;
            flex-direction: row;
            margin-bottom: 30px;
            background: #202020;
            margin-left: 60px;
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
</head>

<body style="background-color: rgba(0, 0, 0); ">
    <h1 class="ani" style="text-align: center;position: relative; bottom:40px; ">point slope form</h1>
    <div style="display: flex;">
        <div class="column">
            <a href="index.php" style="margin-left: 680px;font-size: 15px;margin-top:600px;color: orange">HOME</a>
            <!-- <form action="" method="post"> -->
                <div class="dss">
                    <label>ENTER THE VALUE OF X1 </label>
                    <input type="number" name="x" maxlength="3" id="x" autofocus="on" style=" width: 75px;height: 30px;">
                    <br>
                    <br>
                    <br>
                    <label>ENTER THE VALUE OF Y1 </label>
                    <input type="number" name="y" id="y" maxlength="3" style=" width: 75px;height: 30px;">
                    <br>
                    <br>
                    <br>
                    <label>ENTER THE VALUE OF M(slope) </label>
                    <input type="number" name="slope" id="slope" maxlength="3" style=" width: 75px;height: 30px;">
                    <br>
                    <br>
                    <br>
                    
                    <br>
                    <br>
                    <br>
                    <div class="nikil">
                        <button class="glow-on-hover" onclick="slope(); draw();" id="calculate" name="submit">CALCULATE</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <a href="pointslope.php"><button class="glow-on-hover" type="reset" id="dist" onclick="resetform">RESET</button>
                    </div>
    </a>
                    <label style="font-size: 20px;color: orange;">EQUATION</label>
                    <input type="text" name="equation" id="eq" style=" width: 200px;height: 30px;"readonly>
                </div>
            <!-- </form> -->
            <br>
            <label style="font-size: 20px;color: gold;">
                <b>FORMULAE:- y - y 1 = m(x - x 1 ) <br>
                </b>
            </label>
        </div>
        <div class="column" style="background-color: white;color: black">
            <canvas width="645" height="510" id="myCanvas" style="background-image: url(images/grp1.png);background-repeat: no-repeat;"></canvas>
            <br />
            <br />
        </div>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        var eq = "";
        var x = 0;
        var y = 0;
        var m = 0;

        function slope() {
            x = (document.getElementById("x").value);
            y = (document.getElementById("y").value);
            m = (document.getElementById("slope").value);
            if(x== "" || y =="" || m == "")
            {
                alert("can't be empty")
            }
            else{
            var c = y - m * (x);
            eq = 'y=' + m + 'x' + c;
            document.getElementById("eq").value = eq;
        }}

        function draw() {
            var x1 = parseInt(document.getElementById("x").value);
            var y1 = parseInt(document.getElementById("y").value);
            var m = parseInt(document.getElementById("slope").value);
            a = "y2" + "-" + y1
            b = "x2" + "-" + x1
            c = m + "*x2"
            d = -m * x1
            e = "y2=" + -y1
            i = -y1
            f = c + "=" + -x1
            g = x1 / m
            h = "x2=" + g
            j = g
            t = x1 * 10
            u = y1 * 10
            v = i * 10
            w = j * 10
            var canvas = document.getElementById('myCanvas');
            var context = canvas.getContext('2d');
            context.beginPath();
            context.strokeStyle = "black";
            context.lineWidth = 4;
            context.moveTo(t, u);
            context.lineTo(v, w);
            context.stroke();
        }
        function resetForm() {
            document.getElementById("x").value = "";
            document.getElementById("y").value = "";
            document.getElementById("slope").value = "";
            document.getElementById("eq").value = "";
            var canvas = document.getElementById('myCanvas');
            var context = canvas.getContext('2d');
            context.clearRect(0, 0, canvas.width, canvas.height);
        }

        $(document).ready(function() {
            $("#calculate").click(function() {
                var data = 'x=' + x + '&y=' + y + '&slope=' + m + '&equation=' + eq;

                $.ajax({
                    type: "POST",
                    url: "pointslopesenddata.php",
                    data: data,
                    cache: false,
                    success: function(result) {
                        // alert("inserted..!");
                        console.log(data);
                    }
                });
            });
        });
    </script>
</body>

</html>