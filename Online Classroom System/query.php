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
	<script>
		//java script valadtion for e-mail, query field, guest name
		function validateFormPublicQuery() {
			var email = document.forms[ "update" ][ "email" ].value;
			var query = document.forms[ "update" ][ "queryx" ].value;
			var query = document.forms[ "update" ][ "gname" ].value;
			if ( email == null || email == "" ) {
				alert( "Email Address must be filled out" );
				return false;
			}
			if ( query == null || query == "" ) {
				alert( "Query field must be filled out" );
				return false;
			}
			if ( gname == null || gname == "" ) {
				alert( "Full Name must be filled out" );
				return false;
			}
		}
	</script>
	<div class="row">
		<div class="col-md-2"></div>

		<div class="col-md-8">
			<h3> Welcome Guest</h3>
			<form action="" method="POST" name="update" onsubmit="return validateFormPublicQuery()">
				<fieldset>
					<legend>
						<h3 style="padding-top: 25px;"> Post Query Details </h3>
					</legend>
					<div class="control-group form-group">
						<div class="controls">
							<input placeholder="Full Name" type="text" class="form-control" id="gname" name="gnamex" maxlength="50">
							<p class="help-block"></p>
						</div>
					</div>

					<div class="control-group form-group">
						<div class="controls">
						 <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
							<p class="help-block"></p>
						</div>
					</div>

					<div class="control-group form-group">
						<div class="controls">
							<label>Query : </label>
							<input type="text" placeholder="Enter Query" name="squeryx" required>
							
							<p class="help-block"></p>
						</div>
					</div>
					<div class="form-group">
					 <button type="submit" value="Post Query" name="update" class="btn btn-success" style="border-radius:0%">send</button>
						 
						<button type="reset" name="reset" class="btn btn-danger" style="border-radius:0%">Clear</button>
				</fieldset>
			</form>
			<?php
				$servername = "localhost";
      $username = "root";
      $password = "";
      $database = "xyz";

     
      $conn = mysqli_connect($servername, $username, $password, $database);
 
      if (!$conn)
	  {
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
	  
			if ( isset( $_POST[ 'update' ] ) ) {
				
				$tempsquery = $_POST[ 'squeryx' ];
				$tempseid = $_POST[ 'email' ];
				$tempgname = $_POST[ 'gnamex' ];
				$sql = "INSERT INTO `query`(`query`, `email`) VALUES ('$tempsquery','$tempseid')";
				//$sql2 = "INSERT INTO `guest`(`Gname`, `GuEid`) VALUES ('$tempgname','$tempseid')";
				//mysqli_query( $connect, $sql2 );
				if ( mysqli_query( $conn, $sql ) ) {
					echo "<br>
				<br><br>
				<div class='alert alert-success fade in'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<strong> Success!</strong> Your Query Added Successfully. Reff. No: " . mysqli_insert_id( $conn ) . "
				</div>";
				} else {
					//error message if SQL query fails
					echo "<br><Strong>Query Addeding Faliure. Try Again</strong><br> Error Details: " . $sql . "<br>" . mysqli_error( $conn );
				}
				//close the connection
			
			}
			?>
			</div>

		<div class="col-md-2"></div>
		</div>
		</body>
		</html>