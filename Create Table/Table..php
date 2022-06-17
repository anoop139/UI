<?php
include("../Conn.php");
?>
<form>
<?php

if(isset($_GET['parent']))
{
	$pt="create table user(
	 uid int(255) primary key auto_increment,
	 name varchar(255),
	 email varchar(255) unique,
	 adress varchar(255),
	 phoNo varchar(255) unique	
	)";
	$query = mysqli_query($conn, $pt);
	
	if($query)
	{
		echo"Parent table creted";
	}
	else 
	{
		echo"Parent table not created";
	}
}
if(isset($_GET['child']))
{
	$ct="create table empl(
	 eid int(255) primary key auto_increment,
	 ename varchar(255),
	 adress varchar(255),
	 ep int(255),
	 foreign key(ep) references user(uid)	
	)";
	$query = mysqli_query($conn, $ct);
	
	if($query)
	{
		echo"Child table creted";
	}
	else 
	{
		echo"child table not created";
	}
}
?><br>

<div style="padding-top:58px; text-align:right;"><input type ="submit" name="parent" value="click here to create parent table">&nbsp;<input type ="submit" name="child" value="click here to create child table"  ></div>
</form>