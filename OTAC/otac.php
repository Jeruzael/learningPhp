<?php 
include_once('../php/connection.php');

$con = connect();

$username = $_POST['username'];
$password = $_POST['pass'];

$db_user = "SELECT username, password FROM account WHERE username='$username'";

$result = $con->query($db_user);

$row = $result->fetch_array(MYSQLI_ASSOC);

/*echo "db_user: ". $row['username']. ", db_pass:". $row['password'];*/

if($row['password'] == $password){
	header("Location: home.php", true, 301);
	echo "login succesfully".$row['password'].$password;
}else{
	header("Location: default.php", true, 301);	
}


$con->close();
?>