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
if ( isset( $_POST[ 'update' ] ) ) {

  
    $name=$_POST['name'];
	 $address=$_POST['address'];
	 $city=$_POST['city'];
	 $email=$_POST['email'];
	 $phone=$_POST['phone'];
	  $dob=$_POST['dob'];
	 $gender=$_POST['gender'];
	 $result="UPDATE `register` SET name='".$name."',address='".$address."',city='".$city."',email='".$email."',phone='".$phone."',dob='".$dob."',gender='".$gender."' WHERE email='".$email."'";
     

	 $dbrun=mysqli_query($conn,$result);
if(!$dbrun)
{
  
  
  die('eroor'.mysqli_connect_error());
}       
     else
     {
        echo "updated<br>";
     }

}
?>
<?php

$id = $_GET[ 'id' ];
echo "id = $id" ;
	$sql = "select * from  register where id=$id ";
			$result = mysqli_query( $conn, $sql );

			while ( $res= mysqli_fetch_array( $result ) )
			{
	$id=$res['id'];
    $name=$res['name'];
	 $address=$res['address'];
	 $city=$res['city'];
	 $email=$res['email'];
	 $phone=$res['phone'];
	  $dob=$res['dob'];
	 $gender=$res['gender'];
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

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name"  value="<?php echo $name;?>" required>

     <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address"  value="<?php echo $address ;?>"  required>

      <label for="cities"><b>Choose a city:</b></label>
    <select name="city" id="cities" value="<?php echo $city;?>"  required>
                        <option value="">Select your city</option>
                         <option value="Jaipur">Jaipur</option>
                        <option value="Varanasi">Varanasi</option>
                         <option value="Udaipur">Udaipur</option>
                          <option value="Bangalore">Bangalore</option>
                          <option value="Kolkata">Kolkata</option>
                          
    </select>
    <br>
<br>
     <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" value="<?php echo $email;?>"  required>

     

     <label for="phone"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phone" value="<?php echo $phone ;?>"  required>
	
	
	<label>Date of Birth: <span style="color: #ff0000;">*</span></label>
							<input type="Date" class="form-control" name="dob" id="dob" value="<?php echo $dob;?>">
	
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
							<p class="help-block"></p>
						</div>
					</div>
					
					
				
							
							<p class="help-block"></p>
						

    <br><input type="hidden" name="id" value=<?php echo $_GET['id'];?></br>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

<input type ="submit"  id ="button" name ="update" value= "updatedata">
  </div>
</form>

</body>
</html>

