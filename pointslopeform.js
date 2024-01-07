function slope() {
    x = parseInt(document.getElementById("x").value);
    y = parseInt(document.getElementById("y").value);
    m = parseInt(document.getElementById("slope").value);
    
    if (isNaN(x) || isNaN(y) || isNaN(m)) {
        alert("Please enter valid numeric values for X1, Y1, and Slope (M).");
        return;
    }
    
    var c = y - m * x;
    eq = 'y=' + m + 'x' + c;
    document.getElementById("eq").value = eq;
}

function draw() {
    // Your draw function here, if needed
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
        // Check if the inputs are valid
        if (isNaN(x) || isNaN(y) || isNaN(m)) {
            alert("Please enter valid numeric values for X1, Y1, and Slope (M).");
            return;
        }

        var data = 'x=' + x + '&y=' + y + '&slope=' + m + '&equation=' + eq;

        $.ajax({
            type: "POST",
            url: "pointslopesenddata.php",
            data: data,
            cache: false,
            success: function(result) {
                // Handle the response here if needed
                console.log(data);
            }
        });
    });
});
