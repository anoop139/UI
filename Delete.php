<?php
include("Conn.php");
error_reporting(0);
?>

<html>
<head>
<style>
body
{
	background-color:lightblue;
}
#f2
{
	height:330px;
	border:2px solid black;
}
#f1
{
      padding-top:100px;
	  text-align:center;
	  
}

</style>
</head>

<body>

<form id="f1" action="#" method="POST">
 <div id="f2">
<?php
$em = $_GET['del'];
echo"<h1>Are you sure you want to delete $em's record?</h1>";
if($_POST['Sub'])
{
	
	//echo$em."record deleteed";

$fetch ="Delete from user where name='$em'";
$query = mysqli_query($conn, $fetch);
if($query)
{
	echo"<br><h1 style='color:green' id='info'>Record deleted successfully</h1>";
}
else 
{
	echo"<h1 style='color:red'>Deletions failed</h1>";
}

}
?>


 </div>
</div>

<div style="text-align:left;padding-top:0px; text-align:right;" id="Ba"><a href="Display.php"><input type="button" id="No" style="padding-right:50px; background-color:black; font-size:20px; color:white;"  value="Back"></a>
<input type="submit" name="Sub" style="padding-right:50px; background-color:black; margin-bottom:50px; font-size:20px; color:white;" value="Yes" onclick="sub()">
</form>

</body>
</html>