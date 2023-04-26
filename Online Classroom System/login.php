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
	$email = test_input($_POST["email"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM `register`  where email='".$email."' and password='".$password."'");
	$stmt->execute();
	$users = $stmt->fetchAll();

	$_SESSION[ "email" ] = $email;
	
	
	
	foreach($users as $user ) {
		
		if(($user['email'] == $email) &&
			($user['password'] == $password)) {
				header("Location: userinfo.php");
		}
		else {
			echo "<h3><span style='color:red; '>Invalid Student ID & Password. Page Will redirect to Login Page after 2 seconds </span></h3>";
		}
	}
}

?>
<html>
  <head>
    <title>
      Login Page
    </title>
    <link href="login.css.css" rel="stylesheet">
  </head>
  <body>

    
    <form id="login-form" action ="login.php"method="post" >
      <h1>PLEASE LOG IN</h1>
      <label for="email">Email</label>
      <input type="text" name="email" id="email" required/>
     
      <label for="password">Password</label>
      <input type="password" name="password" id="password" required/>
      <input type="submit" name="signin"   value="SignIn"/>
	  
	  	  
	  <p>Not yet a user? <a href="r1.php">Sign up </a>  /  <a href="recover.php">Forgot Password</a></p>
	  <p> </p>
    </form>
	
  </body>
</html>