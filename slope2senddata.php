<?php

//database connection
$con = mysqli_connect('localhost', 'root', '', 'test') or die("Connection Error: " . mysqli_error($con));
    $x1 =  $_POST['x1'];
    $y1 =  $_POST['y1'];
    $x2 =  $_POST['x2'];
    $y2 =  $_POST['y2'];
    $slope =  $_POST['slope'];

    $query = "INSERT INTO `slope_of_the_line`(`x1`, `y1`, `x2`, `y2`,`slope`) VALUES ('$x1','$y1','$x2','$y2','$slope')";
    $insert = mysqli_query($con, $query);
    // if ($insert) { 
?>
    // <script>
        // alert("data inserted");     
   // </script>
    // <?php
        // } else {
        // 
        ?>
    // <script>
        //      //   alert("Oops! Something went wrong while submitting ..!")
        //     
    </script>
<?php 
mysqli_close($con);
?>
