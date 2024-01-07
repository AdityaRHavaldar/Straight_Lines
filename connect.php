<?php


//database connection
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('connection failed :' .$conn->connect_error);
}
else
{
    $stmt= $conn->prepare("INSERT INTO two_point_form(x1,y1,x2,y2,EQUATION) values(?,?,?,?,?)");
$stmt->bind_param("iiiis",$x1,$y1,$x2,$y2,$EQUATION);
$x1 = $_POST['x1'];
$y1 = $_POST['y1'];
$x2 = $_POST['x2'];
$y2 = $_POST['y2'];
$EQUATION = $_POST['EQUATION'];
$stmt->execute();
echo "connection successfull.";
$stmt->close();
$conn->close();
}
?>