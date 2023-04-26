
<?php
session_start();

  if(!isset($_SESSION["email"])) {
        header("Location: index.php");
        exit();
    }
	
$name=$_SESSION[ "email" ] ;


?>

     



<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 text-center">

			<h3> Welcome <a href="welcomestudent"><?php echo "<span style='color:red'>".$name." </span>";?></a></h3>
			<?php
			include( 'db.php' );
			$varid = $_REQUEST[ 'myds' ];
			//selecting data from assessment table
			$sql = "SELECT * FROM `register` WHERE email='$varid'";
			$result = mysqli_query( $conn, $sql );
			//loop below will print details of assessment
			while ( $row = mysqli_fetch_array( $result ) ) {
				?>
			<fieldset>
				<legend>My Details</legend>
				<form action="" method="POST" name="update">
					<table class="table table-hover">

						<tr>
							<td><strong>ID : </strong>
							</td>
							<td>
								<?php echo $row['id']; ?>
							</td>

						</tr>
						<tr>
							<td><strong>Name :</strong> </td>
							<td>
								<?php echo $row['name']; ?>
							</td>
						</tr>
						<tr>
							<td><strong>Address :</strong> </td>
							<td>
								<?php echo $row['address']; ?>
							</td>
						</tr>
						<tr>
							<td><strong>City :</strong> </td>
							<td>
								<?PHP echo $row['city'];?>
							</td>
						</tr>
						<tr>
							<td><strong>Email  ID: </strong>
							</td>
							<td>
								<?PHP echo $row['email'];?> </td>
						</tr>
						<tr>
							<td><strong>Phone :</strong>
							</td>
							<td>
								<?PHP echo $row['phone'];?>
							</td>
						</tr>
						
						</tr>
						<tr>
							<td><strong>D.O.B. : </strong> </td>
							<td>
								<?PHP echo $row['dob'];?>
							</td>
						</tr>
						<tr>
							<td><strong>Gender :</strong>
							</td>
							<td>
								<?PHP echo $row['gender'];?> </td>
						</tr>
						<tr>
							<td><strong>Password : </strong>
							</td>
							<td>
								<?PHP echo $row['password'];?>
							</td>
						</tr>
						
						<tr>
							<td><a href="update.php?id=<?php echo $row['id']; ?>"><input type="button" Value="Edit" class="btn btn-info btn-sm" style="border-radius:0%;"></a></td>
						<td align= "right">	<input type="button" onclick="window.print()" name="print" value="Print"/></td>
						</tr>
					</table>
				</form>
			</fieldset>
			<?php
			}
			?>
		</div>

		<div class="col-md-2"></div>
	</div>