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