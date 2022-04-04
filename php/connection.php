<?php 

function connect(){
	$username = "root";
	$password = "";
	$db = "practice";
	$host = "localhost";

	$con = new mysqli($host, $username, $password, $db);

	if($con->connect_error){
		echo $con->connect_error;
	}else{
		return $con;
	}
}

?>