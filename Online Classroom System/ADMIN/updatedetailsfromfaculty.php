<?php
$servername= "localhost";
$username ="root";
$password ="";
$dbname="xyz";
$conn = mysqli_connect($servername, $username,$password,$dbname);

//die if connectionis not succesfull

if(!$conn)
{
	die("sorry we are failed to connect ".mysqli_connect_error( ));
}
else
{
//echo "<br>succesfully connect";
}
	
?>

<?php

$new2=$_GET['FID'];

$sql="SELECT * FROM `facultytable` WHERE FID= $new2";
			$result = mysqli_query( $conn, $sql );

			while ( $res= mysqli_fetch_array( $result ) )
			{
	$id=$res['FID'];
    $name=$res['FName'];
	 $fname=$res['FaName'];
	 $addrs=$res['Addrs'];
	 $gender=$res['Gender'];
	 $phone=$res['PhNo'];
	  $dob=$res['JDate'];
	 $city=$res['City'];
	 $pass1=$res['Pass'];
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

<form action="" style="border:1px solid #ccc"method ="post">
  <div class="container">
    <h1>REGISTRATION PLEASE</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Faculty Name</b></label>
    <input type="text" placeholder="Enter Name" name="fname"  value="<?php echo $name;?>" required>

     <label for="address"><b>Father Name</b></label>
    <input type="text" placeholder="Enter Address" name="faname"  value="<?php echo $fname ;?>"  required>
	
	
	 <label for="address"><b>Address </b></label>
    <input type="text" placeholder="Enter Address" name="addrs"  value="<?php echo $city ;?>"  required>

      
<br>
    
     <label>Date of Birth: <span style="color: #ff0000;">*</span></label>
							<input type="Date" class="form-control" name="jdate" id="dob" value="<?php echo $dob;?>"> 
							
							<br>
							<br>
							

     <label for="phone"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phno" value="<?php echo $phone ;?>"  required>
	
	
	
	
	<div class="control-group form-group">
						<div class="controls">
							<label>Gender: <span style="color: #ff0000;">*</span></label>
							<p>
								<label>
								<input type="radio" name="gender" value="<?php echo $gender;?>" id="Gender_0" checked>
								Male</label>
															

								<label>
								<input type="radio" name="gender" value="Female" id="Gender_1">
								Female</label>
								
								<label>
								<input type="radio" name="gender" value="Other" id="Gender_2">
								Other</label>
							
								<br>
							</p>
							
							City : <input type="text" name="city" class="form-control" value="<?PHP echo $city;?>" ><br></div>
				      
					  <label for="phone"><b>password</b></label>
    <input type="text" placeholder="Enter password" name="pass" value="<?php echo $pass1 ;?>"
			
							<p class="help-block"></p>
						</div>
					</div>
					
					
				
							
							<p class="help-block"></p>
						

    <br><input type="hidden" name="id" value=<?php echo $_GET['FID'];?></br>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

<input type ="submit"  id ="button" name ="update" value= "updatedata">
  </div>
</form>

</body>
</html>
   <?php
		if(isset($_POST['update']))		
			{
				$tempfname=$_POST['fname'];				
				$tempfaname=$_POST['faname'];
				$tempaddrs=$_POST['addrs'];	
                 $tempphno=$_POST['phno'];				
				$tempgender=$_POST['gender'];
				$tempcity=$_POST['city'];
				$temppass=$_POST['pass'];
				//below SQL query will update the existing faculty 
				$sql="UPDATE `facultytable` SET  FName='$tempfname',FaName='$tempfaname',Addrs='$tempaddrs', Gender='$tempgender', City='$tempcity',Pass='$temppass', PhNo=$tempphno WHERE FID=$new2"; 
				
				if (mysqli_query($conn, $sql)) {
					echo "<br>

					<br><br>
					<div class='alert alert-success fade in'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<strong>Success!</strong> Faculty Details updated has been deleted.
					</div>";
					} else {
					// below statement will print error
					echo "<br><Strong>Faculty Details Updating Faliure. Try Again</strong><br> Error Details: " . $sql . "<br>" . mysqli_error($conn);
					}
				//for close connection
					mysqli_close($conn);
						} 
				?>

