<?php
		session_start();

	  if(!isset($_SESSION["email"])) {
        header("Location: index.php");
        exit();
    }
	
$name=$_SESSION[ "email" ] ;


		?>
		<?php include('studenthead.php'); ?>

		<div class="container">
			<div class="row">
				<div class="col-md-2"></div>

				<div class="col-md-8">
					<h3> Welcome <a href="welcomestudent.php" <?php echo "<span style='color:red'>".$name." </span>";?> </a></h3>
					<?php 
		include('db.php');
	

		?>
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<form action="" method="POST" name="update">
							<fieldset>
								<legend>Query Details</legend>
								<table>
									<td>
										<h3>
											<tr><strong>Email ID :</strong> </tr>
											<tr>
												<strong>
													<?php echo $name; ?>
												</strong>
											</tr>
										</h3>
									</td>
									<table>
									</table>
									<td>
										<tr><strong><h3>Query :</h3></strong> </tr><br <tr><textarea rows="10" cols="40" name="squeryx" class="form-control" required></textarea>
										</tr>
									</td>
								</table>
								<br>
								<input type="submit" value="Submit My Query" name="addq" style="border-radius:0%" class="btn btn-success">
							</fieldset>
						</form>
					</div>
				</div>
			</div>
			<?php
			if ( isset( $_POST[ 'addq' ] ) ) {
				//fetch data from table 
				$tempsquery = $_POST[ 'squeryx' ];
				$tempseid = $name;
				$sql = "INSERT INTO `query`(`query`, `email`) VALUES('$tempsquery','$tempseid')";
				if ( mysqli_query( $conn, $sql ) ) {
					echo "<br>
<br><br>
<div class='alert alert-success fade in'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<strong>Success!</strong> Your Query Added Successfully. Reff. No: " . mysqli_insert_id( $conn ) . "
</div>";
				} else {
					//error message if SQL query fails
					echo "<br><Strong>Query Addeding Faliure. Try Again</strong><br> Error Details: " . $sql . "<br>" . mysqli_error( $conn );
				}
				//close the connection
				mysqli_close( $conn );
			}
			?>
		</div>

				<div class="col-md-2"></div>
	</div>
	