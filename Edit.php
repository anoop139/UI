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

<table border='2px' cellpadding='5px'>
<tr>
<tr>
<th>Name</th>
<th>Update Name</th>
<th>Address</th>
<th>Update Address</th>
<th>Email_Id</th>
<th>Update Email_Id</th>
<th>Phone number</th>
<th>Update Phone number</th>
<th>Delete</th>
</tr>
<?php
$Name =$_GET['edit'];
if(isset($Name)) 
{
	$show  ="select *from user where name='$Name'";
$query =mysqli_query($conn, $show);
$row   = mysqli_num_rows($query);


$fetch =mysqli_fetch_assoc($query);

	echo"<tr>
     <td>$fetch[name]</td>
	 <td><a href='Updates/Name.php?name1=$fetch[uid]'</a>Update name</td>
	   <td>$fetch[adress]</td>
	   	 <td><a href='Updates/Adress.php?add=$fetch[uid]'</a>Update Adress</td>
     <td>$fetch[email]</td>
	 <td><a href='Updates/Email.php?em=$fetch[email]'</a>Update email id</td>
     <td>$fetch[phoNo]</td>
	 <td><a href='Updates/Phone.php?pn=$fetch[phoNo]'</a>Update phone No.</td>
	 <td><a href='Delete.php?del=$fetch[name]' name='del'>Delete</a></td>
     </tr>";
	 

}
if(isset($_GET['name']))
{
	$name1 = $_GET['name'];
echo"<h3 style='text-align:center;'>Name updated successfully<h3>";
   $show  ="select *from user where name='$name1'";
 $query =mysqli_query($conn, $show);
$row   = mysqli_num_rows($query);


$fetch =mysqli_fetch_assoc($query);

	echo"<tr>
     <td>$fetch[name]</td>
	 <td><a href='Updates/Name.php?name1=$fetch[uid]'</a>Update name</td>
	   <td>$fetch[adress]</td>
	   	 <td><a href='Updates/Adress.php?add=$fetch[uid]'</a>Update Adress</td>
     <td>$fetch[email]</td>
	 <td><a href='Updates/Email.php?em=$fetch[email]'</a>Update email id</td>
     <td>$fetch[phoNo]</td>
	 <td><a href='Updates/Phone.php?pn=$fetch[phoNo]'</a>Update phone No.</td>
	 <td><a href='Delete.php?del=$fetch[name]' name='del'>Delete</a></td>
     </tr>";
	 
}
if(isset($_GET['ad']))
{
	$adress = $_GET['ad'];
echo"<h3 style='text-align:center;'>Adress successfully<h3>";
   $show  ="select *from user where adress='$adress'";
 $query =mysqli_query($conn, $show);
$row   = mysqli_num_rows($query);


$fetch =mysqli_fetch_assoc($query);

	echo"<tr>
     <td>$fetch[name]</td>
	 <td><a href='Updates/Name.php?name1=$fetch[uid]'</a>Update name</td>
	   <td>$fetch[adress]</td>
	   	 <td><a href='Updates/Adress.php?add=$fetch[uid]'</a>Update Adress</td>
     <td>$fetch[email]</td>
	 <td><a href='Updates/Email.php?em=$fetch[email]'</a>Update email id</td>
     <td>$fetch[phoNo]</td>
	 <td><a href='Updates/Phone.php?pn=$fetch[phoNo]'</a>Update phone No.</td>
	 <td><a href='Delete.php?del=$fetch[name]' name='del'>Delete</a></td>
     </tr>";
	 
}
if(isset($_GET['em']))
{
	$email_Id = $_GET['em'];
echo"<h3 style='text-align:center;'>Email_Id updated successfully<h3>";
   $show  ="select *from user where email='$email_Id'";
 $query =mysqli_query($conn, $show);
$row   = mysqli_num_rows($query);


$fetch =mysqli_fetch_assoc($query);

	echo"<tr>
     <td>$fetch[name]</td>
	 <td><a href='Updates/Name.php?name1=$fetch[uid]'</a>Update name</td>
	   <td>$fetch[adress]</td>
	   	 <td><a href='Updates/Adress.php?add=$fetch[uid]'</a>Update Adress</td>
     <td>$fetch[email]</td>
	 <td><a href='Updates/Email.php?em=$fetch[email]'</a>Update email id</td>
     <td>$fetch[phoNo]</td>
	 <td><a href='Updates/Phone.php?pn=$fetch[phoNo]'</a>Update phone No.</td>
	 <td><a href='Delete.php?del=$fetch[name]' name='del'>Delete</a></td>
     </tr>";
	 
}
if(isset($_GET['phone']))
{
	$phoNo =$_GET['phone'];
echo"<h3 style='text-align:center;'>Phone number updated successfully<h3>";
$show  ="select *from user where phoNo='$phoNo'";
$query =mysqli_query($conn, $show);
$row   = mysqli_num_rows($query);


$fetch =mysqli_fetch_assoc($query);

	echo"<tr>
     <td>$fetch[name]</td>
	 <td><a href='Updates/Name.php?name1=$fetch[uid]'</a>Update name</td>
	   <td>$fetch[adress]</td>
  	   	 <td><a href='Updates/Adress.php?add=$fetch[uid]'</a>Update Adress</td>
     <td>$fetch[email]</td>
	 <td><a href='Updates/Email.php?em=$fetch[email]'</a>Update email id</td>
     <td>$fetch[phoNo]</td>
	 <td><a href='Updates/Phone.php?pn=$fetch[phoNo]'</a>Update phone No.</td>
	 <td><a href='Delete.php?del=$fetch[name]' name='del'>Delete</a></td>
     </tr>";
	 
}



?>
</table>

</form>
</body>
</html>