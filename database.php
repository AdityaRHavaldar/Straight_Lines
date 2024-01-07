<?php
$servername="localhost";
$username="root";
$password="";
$database="library";
//$con=mysqli_connect("localhost","root","","library");
if(!$con)
{
	die("error detected".mysqli_error($con));
}
else
{
	echo"connection stablish successfully";
}
?>