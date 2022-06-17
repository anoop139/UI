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
	width:140px;
	height:30px;
	background-color:black;
	padding-left:1050px;
	line-height:30px;
	margin-left:150px;
} 
.m1
{
	color:white;
}
</style>
</head>

<body>
<div id="menu"><a href="Home.html" class="m1">Home</a>&nbsp; &nbsp;<a href="Fom.html" class="m1" >Create User</a></div><br>
<form class="f1">
<center>


 
</tr>
<?php 

$uid = $_GET['uid'];
$name = $_GET['name'];
$email = $_GET['email'];
$show  ="select *from user  join empl where user.uid=$uid and empl.ep=$uid";
$query =mysqli_query($conn, $show);
$row   = mysqli_num_rows($query);
if($row>0)
{
	echo"<h1>".$name."'s Employers's details</h1>";
echo"<table border='2px' cellpadding='5px'>
         <tr>
      <th>Employers Name</th>
     <th>Employers Address</th>
     <th>Edit</th>
     </tr>";
while($fetch =mysqli_fetch_assoc($query))
{
	 echo"<td>$fetch[ename]</td>
	   <td>$fetch[adress]</td>
	   <td><a href='EditBoss.php?edit=$fetch[uid]&em=$email'>Edit</a></td>
     </tr>";

}
}
else
{
	echo"<h1>".$name." is not assigned Employe</h1>";
}
?>
</table>
</center>
</form>
</body>
</html>