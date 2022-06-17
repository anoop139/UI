<?php
include("Conn.php");
error_reporting(0);
?>
<html>
<head>
<style>
#d1
{
	border:2px solid black;
	height:400px;
	
}
</style>
</head>
<body>
<?php
$em = $_GET['bos'];
echo"Number of employers is ".$em;

?>
<div id="d1">j</div>
</body>
</html>