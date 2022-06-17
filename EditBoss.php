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
.f1
{
	 height:200px;
	 border:2px solid black;
}
.f1
{
	background-image:url("02.jpeg");
	background-color:white;
}
.f1
{
	  margin-top:0px;
	  padding-top:40px;
      padding-bottom:150px;
	   
	  
}
.f1
{
	height: auto;
	width: 100%;
}
 th,td
 {
	 font-size:20px;
	 //olor:white;
 }
 a
 {
	 text-decoration:none;
 }
 a:hover
 {
	 text-decoration:underline;
 }
#menu
{
	//text-align:right;
	border:2px solid black;
	width:208px;
	height:30px;
	background-color:black;
	line-height:30px;
	padding-left:1030px;
	margin-left:150px;
} 
.m1
{
	color:white;
}
</style>
</head>

<body>
<div id="menu"><a href="Home.html" class="m1">Home</a>&nbsp; &nbsp;<a href="Display." class="m1">list Users</a>&nbsp; &nbsp;<a href="Fom.html" class="m1" >Create User</a></div><br>
<form class="f1">
<center>
<table border='2px' cellpadding='5px'>
<tr>
<tr>
<th>Name</th>
<th>Update Name</th>
<th>Address</th>
<th>Update Address</th>
<th>Delete</th>
</tr>
<?php 
$uid=$_GET['edit'];
$em=$_GET['em'];

if(isset($uid))
{
	//echo"<h1>"."Name ".$em."</h1>";
$show  ="select *from empl where ep=$update";
$show1  ="select *from user where uid=$uid";
$query =mysqli_query($conn, $show);
$query1 =mysqli_query($conn, $show1);
$row   = mysqli_num_rows($query);

$fetch1 =mysqli_fetch_assoc($query1);
 echo"<h2> Update the Employer details for ".$fetch1['name']."</h2><br>";	
$show  ="select *from empl where ep=$uid";
$query =mysqli_query($conn, $show);
$row   = mysqli_num_rows($query);


$fetch =mysqli_fetch_assoc($query);

	echo"<tr>
     <td>$fetch[ename]</td>
	 <td><a href='Boss Updates/Name.php?name1=$fetch[eid]&em=$em'</a>Update Employers Name</td>
	   <td>$fetch[adress]</td>
	   <td><a href='Boss Updates/Adress.php?name1=$fetch[eid]&em=$em'</a>Update Employers Adress</td>
	 <td><a href='Boss Updates/DeleteBoss.php?del=$fetch[eid]&del1=$fetch1[name]'>Delete</a></td>
     </tr>";
	 

}
?>
<?php
$update = $_GET['update'];

   if(isset($update))
  {
	//echo"the Email ".$update;

       $getName = "select *from user where email='$update'";
	   $query0   = mysqli_query($conn, $getName);
	   $fet  = mysqli_fetch_assoc($query0);
	   echo"<br><h2>The Employer details for ".$fet['name']." is updated sucessfully</h2></h3>";
	 
	 $rol =$fet['uid'];
 $show  ="select *from empl where ep=$rol";
$query =mysqli_query($conn, $show);
$row   = mysqli_num_rows($query);


$fetch =mysqli_fetch_assoc($query);

	echo"<tr>
     <td>$fetch[ename]</td>
	 <td><a href='Boss Updates/Name.php?name1=$fetch[eid]&em=$em'</a>Update Employers Name</td>
	   <td>$fetch[adress]</td>
 <td><a href='Boss Updates/Adress.php?name1=$fetch[eid]&em=$em'</a>Update Employers Adress</td>
	 <td><a href='Boss Updates/DeleteBoss.php?del=$fetch[eid]' name='del'>Delete</a></td>
     </tr>";
	 


 }
?>

</table>
</center>
</form>
</body>
</body>
</html>