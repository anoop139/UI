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
	width: 92%;
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
#t1
{
	padding-top:25px;
}
#name
{
	float:left;
	padding-left:15px;
}
#submit
{
	text-align:center;
}
#input
{
	border:2px solid black;
}
#sub
{
	position:relative;
	top:130px;
	left:1070px;
}
#sub
{
    background-color:yellow;
}
</style>
</head>

<body>
<div id="menu"><a href="Home.html" class="m1">Home</a>&nbsp; &nbsp;<a href="Display." class="m1">list Users</a>&nbsp; &nbsp;<a href="Fom.html" class="m1" >Create User</a></div><br>
<form class="f1">
<h1 id="name">Search by Name</h1><div style="text-align:center;" id="t1"><input type="text" name="name" id="input"></div><br>
  <div id="submit"><input type="submit" name="Sub" value="View the record"></div><BR>

<?php
$Name =$_GET['name'];
if(isset($_GET['Sub']))
{

		
	//echo"Name ".$Name;  
$show  ="select *from user where name like'$Name%'";


$query =mysqli_query($conn, $show);
$row   = mysqli_num_rows($query);
//echo$row;
	if($row>0)
	{
while($fetch =mysqli_fetch_assoc($query))
{
	
	echo"<tr>
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
     <td>$fetch[name]</td>
	 <td><a href='Updates/Name.php?name1=$fetch[name]'</a>Update name</td>
	   <td>$fetch[adress]</td>
	   	 <td><a href='Updates/Adress.php?add=$fetch[uid]'</a>Update Adress</td>
     <td>$fetch[email]</td>
	 <td><a href='Updates/Email.php?em=$fetch[email]'</a>Update email id</td>
     <td>$fetch[phoNo]</td>
	 <td><a href='Updates/Phone.php?pn=$fetch[phoNo]'</a>Update phone No.</td>
	 <td><a href='Delete.php?del=$fetch[name]' name='del'>Delete</a></td>
     </tr>";
}
	 

	}
	else 
     {
		 echo"<h1 style='text-align:center;'>Record not found</h1>";
	 }
	 //Pratibha.kumari@enableindia.org

}
?>
</table>
<a id="sub" href="Display.php"><input type="button" value="Click here to view the record" style="padding:5px"></a>
</form>
</body>
</html>