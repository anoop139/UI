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
#f1
{
	height:auto;
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
<form id="f1">
<?php
$email     =$_POST['email'];
$phoNo     =$_POST['phoNo'];

$fetch ="select * from user where email='$email'";
$fetch1 ="select * from user where phoNo='$phoNo'";
$query1 = mysqli_query($conn, $fetch);
$query2 = mysqli_query($conn, $fetch1);
$exists   = mysqli_num_rows($query1);
$exist2   = mysqli_num_rows($query2);
$record   = mysqli_fetch_assoc($query1);
if($email==$record['email'])
{
	echo"<h1 style='margin:100px; color:red;'>The Email Id exists</h1>";   
//hi
}
if($exist2>0)
{
		echo"<h1 style='margin:100px; color:red;'>Phone number exists</h1>";   
}

?>

<?php
$userName  =$_POST['userName'];
$email =$_POST['email'];
$addr      =$_POST['addr'];
$phoNo     =$_POST['phoNo'];
      
$insert = "insert into user(name,adress, email, phoNo) 
values('$userName','$addr','$email', '$phoNo')";
$query = mysqli_query($conn, $insert);
$fetch ="select * from user where email='$email'";
$query1 = mysqli_query($conn, $fetch);
//$exists   = mysqli_num_rows($query1);

if($query)
{
	echo"<br><h1 style='color:green'>Record has been inserted succesfully </h1>";


}

else 
{
	echo"<h1 style='color:red'>Record cannot be inserted</h1>";
}




?>
<div style="text-align:left;padding-top:224px; text-align:right;"><a href="Fom.html"><input type="button" style="padding-right:50px; background-color:black; font-size:20px; color:white;" value="Back"></a>&nbsp;<a href="Display.php"><input type="button" style="padding-right:50px; background-color:black; font-size:20px; color:white;" value="click next"></a></div>
</form>
</body>
</html>