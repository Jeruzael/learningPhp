<?php 
include_once('../php/connection.php');
include_once('IdGenerator.php');

$con = connect();

$username = $_POST['username'];
$password = $_POST['pass'];
$retypePass = $_POST['retype-pass'];
$email = $_POST['email'];

$addNewAcc = "INSERT INTO account (username, password, email, id) VALUES ('$username','$password','$email','". Idgen::genNum(Idgen::checkExistingId()) ."')";

if($password == $retypePass){
	if($con->query($addNewAcc) === TRUE){
		header("Location: default.php");
		echo "<script>alert('Data added')</script>";
	}else{
		echo "no data added: error => " . $con->error;
	}
}else{
	echo "<script>alert('Password isnt match');</script>";
	header("Location: default.php");
}



?>

