<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>infos</title>
</head>
<body>
	<h2>INFORMATIONS</h2>
	<h3>Php generated</h3><br>
	<?php 
	include_once("connection.php");

	$con = connect();

	$fn = $mn = $ln = $male = $female = "";

	$fn = $_POST['firstname'];
	$mn = $_POST['middlename'];
	$ln = $_POST['lastname'];

	$msg = "Firstname: $fn\n 
	Middlename: $mn\n
	Lastname: $ln";

	$to = "jeruzael.dumale08@gmail.com";
	$subject = "Aliens Abducted";

	$sql = "INSERT INTO infos (firstname, middlename, lastname, gender) VALUES ('$fn','$mn','$ln','Unidentified')";

	$sql2 = "INSERT INTO account (username, password, id) VALUES ('username1','password1','x000212')";

	if($con->query($sql2) === TRUE){
		echo "<script>alert('new record!');</script>";
	}else{
		echo "error" . $sql . "<br>" . $con->error;
	}

	$con->close();

	echo $msg;

	?>

	<br><br>
	<h3>With Html tag</h3>
	<span>Firstname: <?php echo $fn ?></span><br>
	<span>Middlename: <?php echo $mn ?></span><br>
	<span>Lastname: <?php echo $ln ?></span>
	
</body>
</html>