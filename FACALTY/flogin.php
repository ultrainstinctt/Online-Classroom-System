

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
	$fid = test_input($_POST["fid"]);
	$pass = test_input($_POST["pass"]);
	$stmt = $conn->prepare("SELECT * FROM `facultytable` where FID='".$fid."' and Pass ='".$pass."'");
	$stmt->execute();
	$users = $stmt->fetchAll();

	$_SESSION[ "fid" ] = $fid;
	
	
	foreach($users as $user ) {
		
		if(($user['FID'] == $fid) &&
			($user['Pass'] == $pass)) {
				echo"hi";
				header("Location: welcomefaculty.php");
		}
		else {
			echo "<h3><span style='color:red; '>Invalid Student ID & Password. Page Will redirect to Login Page after 2 seconds </span></h3>";
		}
	}
}

?>
<html>


  <head>
  	<meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="login.css">
    <title>
      Login Page
    </title>
    <link href="login.css.css" rel="stylesheet">
  </head>
  <body>

    
    <form id="login-form" action ="flogin.php"method="post" >
	<div class="login-box">
      <h1>Faculty  Login</h1>
	  
			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Enter Your ID"
						name="fid" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Password"
						name="pass" value="">
			</div>
	  
	  
      <input class="button"type="submit" name="signin"   value="SignIn"/>
	  
	 	</div>
    </form>
	
  </body>
</html>