<?php


session_start();
  if(!isset($_SESSION["adminname"])) {
        header("Location: index.php");
        exit();
    }
	
?>
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-4"></div>

		<div class="col-md-4">
			<h3 class="page-header">Welcome <a href="welcomeadmin">Admin</a> </h3>
			<h4 class="page-header">Add New Faculty </h4>
			
			<form action="linkfaculty.php" method="POST" name="update">


				<div class="form-group">
					<label for="Faculty Name">Faculty Name : <span style="color: #ff0000;">*</span></label>
					<input type="text" name="fname" class="form-control" id="fname" required>
				</div>

				<div class="form-group">
					<label for="Father Name">Father Name :<span style="color: #ff0000;">*</span></label>
					<input type="text" class="form-control" id="faname" name="faname" required>
				</div>

				<div class="form-group">
					<label for="Address">Address : <span style="color: #ff0000;">*</span></label>
					<input type="text" class="form-control" name="addrs" required id="addrs">
				</div>

				<div class="form-group">
					<label for="Gender">Gender : &nbsp;</label>
					<input type="radio" name="gender" value="Male" id="Gender_0" checked> Male
					<input type="radio" name="gender" value="Female" id="Gender_1"> Female
				</div>

				<div class="form-group">
					<label for="PhoneNumber">Contact : <span style="color: #ff0000;">*</span></label>
					<input type="text" class="form-control" id="phno" name="phno" maxlength="10" required>
				</div>

				<div class="form-group">
					<label for="Joining Date">Joining Date : <span style="color: #ff0000;">*</span></label>
					<input type="date" class="form-control" id="jdate" name="jdate" placeholder="YYYY-MM-DD" required>
				</div>

				<div class="form-group">
					<label for="City">City : <span style="color: #ff0000;">*</span></label>
					<input type="text" class="form-control" id="city" name="city" required>
				</div>

				<div class="form-group">
					<label for="Password">Password :<span style="color: #ff0000;">*</span></label>
					<input type="password" class="form-control" name="pass" required id="pass">
				</div>
				<div class="form-group">
					<label for="Password">cPassword :<span style="color: #ff0000;">*</span></label>
					<input type="password" class="form-control" name="cpass" required id="pass">
				</div>

				<div class="form-group">
					<input type="submit" value="Add New Faculty" name="addnewfaculty" style="border-radius:0%" class="btn btn-success">
				</div>

			</form>
		

	
		</div>

		<div class="col-md-4"></div>
	</div>
</body>
</html>
