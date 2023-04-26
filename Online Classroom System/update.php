<?php
session_start();

  if(!isset($_SESSION["email"])) {
        header("Location: index.php");
        exit();
    }
	
$name=$_SESSION[ "email" ] ;


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
			<h3> Welcome <a href="userinfo.php"><?php echo "<span style='color:red'> ".$name."</span>";?></a></h3>
			<?php
			include( "db.php" );
			$new3 = $_GET[ 'id' ];
			//below query will print the existing record of student
			$sql = "select * from  register where id=$new3";
			$result = mysqli_query( $conn, $sql );

		while( $row= mysqli_fetch_array( $result ) ) {
				?>
			<form action="" method="POST" name="update">
				
				<div class="form-group">
					ID : <?php echo $row['id']; ?>
				</div>
				<div class="form-group">
				 Name : <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
				</div>
				<div class="form-group">
		Address : <input type="text" name="address" class="form-control" value="<?php echo $row['address']; ?>"><br>
				</div>
				<div class="form-group">
					City : <input type="text" name="" class="form-control" value="<?PHP echo $row['city'];?>"><br>
				</div>
				 <label for="cities"><b>Choose a city:</b></label>
    <select name="city" id="cities" value="<?php echo $city;?>"  >
                        <option value="">Select your city</option>
                         <option value="Jaipur">Jaipur</option>
                        <option value="Varanasi">Varanasi</option>
                         <option value="Udaipur">Udaipur</option>
                          <option value="Bangalore">Bangalore</option>
                          <option value="Kolkata">Kolkata</option>
                          
    </select>
    <br>
				<div class="form-group">
					Phone : <input type="text" name="phone" class="form-control" value="<?PHP echo $row['phone'];?>"><br>
				</div>
				<label>Date of Birth: <span style="color: #ff0000;">*</span></label>
							<input type="Date" class="form-control" name="dob" id="dob" value="<?php echo  $row['dob'];?>">
				
					<br> <br>

				
				<div class="control-group form-group">
						<div class="controls">
							<label>Gender: <span style="color: #ff0000;">*</span></label>
							<p>
								<label>
								<input type="radio" name="gender" value="<?php echo $row['gender'];?>" id="Gender_0" checked>
								Male</label>
															

								<label>
								<input type="radio" name="gender" value="Female" id="Gender_1">
								Female</label>
								
								<label>
								<input type="radio" name="gender" value="Other" id="Gender_2">
								Other</label>
							
								<br>
							</p>
							<p class="help-block"></p>
						</div>
					</div>
					<div class="form-group">
				email: <input type="email" name="email" class="form-control" value="<?PHP echo $row['email'];?>"><br>
				</div><br>
				<div class="form-group">
					Password : <input type="text" name="password" class="form-control" value="<?PHP echo $row['password'];?>"><br>
				</div><br>
				<div class="form-group">

					<input type="submit" value="Update!" name="update" class="btn btn-primary" style="border-radius:0%">
				</div>
			</form>
			<?php
			}
			?>
			</body>
</html>
			<?php
if ( isset( $_POST[ 'update' ] ) ) {

  
    $name=$_POST['name'];
	 $address=$_POST['address'];
	 $city=$_POST['city'];
	 $email=$_POST['email'];
	 $phone=$_POST['phone'];
	  $dob=$_POST['dob'];
	 $gender=$_POST['gender'];
	  $pass=$_POST['password'];
	 $result="UPDATE `register` SET name='".$name."',address='".$address."',city='".$city."',email='".$email."',phone='".$phone."',dob='".$dob."',gender='".$gender."' ,password='".$pass."' WHERE email='".$email."'";
     
	 $dbrun=mysqli_query($conn,$result);
if(!$dbrun)
{
	echo "<br><Strong>Student Updation Faliure. Try Again</strong><br> Error Details: " . $sql . "<br>" . mysqli_error( $conn );
				}
	
  else {
					echo "

				<br><br>
				<div class='alert alert-success fade in'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<strong>Success!</strong> Student Details has been updated.
				</div>

				";
				} 
					//below statement will print error if SQL query fail.
					
				//for close connection
				mysqli_close( $conn );

			}
			?>

			</div>

		<div class="col-md-4"></div>
	</div>