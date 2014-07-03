<?php 
	require_once('../templates/header.php');
?>
<?php
			//1. DB connection
			$db_connect = mysql_connect("localhost", "root", "");
			if (!$db_connect){
				die("Connection failed: " . mysql_error());
			}
			
			//2. Selectt db
			$db_select = mysql_select_db("test", $db_connect);
			if(!$db_select){
				die("DB selection failed: " . mysql_error());
			}
			//copied here
			$name = $_POST['username'];
			$pos = $_POST['one'];
			$Q1 = $_POST['q1'];
			$Q2 = $_POST['q2'];
				if(empty($name) && empty($pos) && empty($Q1) && empty($Q2)){
					die ("Please fill all the fields");
				}
					
			//insert data into table. SEE THE QUOTES ` and ' !!!!!!
			$order = "INSERT INTO feedback
						(`Name`, `position`, `Q1`, `Q2`) 
						VALUES
						('$name', '$pos', '$Q1', '$Q2')";
			$result = mysql_query($order);
			if($result){
				echo ("<h2>Thanks for your feedback! </h2><br />");
			} else{
				echo ("Input was not successful <br />");
			}
		?>
<html>
	<head>
		<title>Processing </title>
	</head>
	<body>
	<a href="feedback.php">Go Back</a>
		<?php 
			$result = mysql_query("SELECT * FROM feedback", $db_connect);
			if(!$result){
				die("Query failed" . mysql_error());
			}
		?>
	</body> 
</html>
<?php
 mysql_close($db_connect);
?>

<?php 
	require_once('../templates/footer.php');
?>