<?php
$hostName ="localhost";
$userName ="root";
$pass     ="";
$db       ="win";
$conn     = mysqli_connect($hostName, $userName,$pass,$db);

if($conn)
{
	//echo"Connected to database";
}
else 
{
	echo"Failed";
}
?>