<?php
	require_once('../templates/header.php');
	require_once('../templates/footer.php');
?>

 <?php
	#DB Connection
	$db_connect = mysql_connect("localhost","root","");
	if(!$db_connect)
	{
		die ("connection failed: " . mysql_error());
	}
	#DB select
	$db = mysql_select_db("");
	if(!$db)
	{
		die("Service not available: ". mysql_error());
		
	}

	#recieve post data
	$name = $_POST['name'];
	$year = $_POST['year'];
	$cg = $_POST['CG'];
	
?>

