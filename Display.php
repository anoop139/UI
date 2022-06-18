<?php
include("Conn.php");
//error_reporting(0);
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
	width:260px;
	height:30px;
	background-color:black;
	padding-left:1070px;
	line-height:30px;
	margin-left:160px;
} 
.m1
{
	color:white;
}
</style>
</head>

<body>
<div id="menu"><a href= "Home.html" class="m1">Home</a>&nbsp;&nbsp;<a href="EditByName.php" class="m1">Serach by Name</a>&nbsp; &nbsp;<a href="Fom.html" class="m1" >Create User</a></div><br>
<form class="f1">
<center>

<?php 
 
$show  ="select *from user";

$query =mysqli_query($conn, $show);

$row   = mysqli_num_rows($query);

//$fetch1 =mysqli_fetch_assoc($query1);

while($fetch =mysqli_fetch_assoc($query))
{
	$boss ="select *from empl where ep=$fetch[uid]";
	$query1=mysqli_query($conn, $boss);
	$row2   = mysqli_num_rows($query1);
	echo"<table border='2px' cellpadding='5px'>
<tr>
<tr>
<th>Name</th>
<th>Address</th>
<th>Email_Id</th>
<th>Phone number</th>
<th>Number of Employers</th>
<th>Enter Employers Details</th>  
<th>Edit</th>
   </tr>	
	<tr>
     <td>$fetch[name]</td>
	   <td>$fetch[adress]</td>
	   <td>$fetch[email]</td>
     <td>$fetch[phoNo]</td>
	 <td style='text-align:center;'><a href='Emplr.php?uid=$fetch[uid]&name=$fetch[name]&email=$fetch[email]' title='Click here to view Employers detials'>$row2</a></td>
	 <td><a href='Boss.php?uid=$fetch[uid]'?uid=$fetch[uid]'>Click here to add Employers detials</a></td>
	 <td><a href='Edit.php?edit=$fetch[name]' name='edit'>Edit</a></td>
     </tr>";


}
?>
</table>
<?php 
if($row==0)
{
	echo"<h1>Records not found</h1>";
}


?>
</center>
</form>
</body>
</html>