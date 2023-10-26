<?php

include_once('connection.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {
	session_start();
	$adminname = test_input($_POST["adminname"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM `admin` WHERE 1 ");
	$stmt->execute();
	$users = $stmt->fetchAll();

	$_SESSION[ "adminname" ] = $adminname;
	
	foreach($users as $user ) {
		
		if(($user['adminname'] == $adminname) &&
			($user['password'] == $password)) {
				header("Location: welcomeadmin.php");
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo " </script>";
			header( "refresh:0;url=../index.php" );
			
			die();
		}
	}
}

?>

