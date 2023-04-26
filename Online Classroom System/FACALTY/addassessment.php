<?php

session_start();
  if(!isset($_SESSION['fid'])) {
        header("Location: index.php");
        exit();
    }
$fid = $_SESSION[ "fid" ];

?>

<div class="container">
	<div class="row">
		<div class="col-md-8">

			<h3> Welcome Faculty : <a href="welcomefaculty.php" ><span style="color:#FF0004"> <?php echo $fid; ?></span></a> </h3>
			<?PHP
		include( "db.php" );
		if ( isset( $_POST[ 'submit' ] ) ) {
			$name = $_POST[ 'AsName' ];
			$q1 = $_POST[ 'Q1' ];
			$q2 = $_POST[ 'Q2' ];
			$q3 = $_POST[ 'Q3' ];
			$q4 = $_POST[ 'Q4' ];
			

			$done = "
					<center>
					<div class='alert alert-success fade in __web-inspector-hide-shortcut__'' style='margin-top:10px;'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>&times;</a>
					<strong><h3 style='margin-top: 10px;
					margin-bottom: 10px;'> Assessment added Sucessfully.</h3>
					</strong>
					</div>
					</center>
					";

			$sql = "INSERT INTO `examdetails`(`ExamName`, `Q1`, `Q2`, `Q3`, `Q4`) VALUES ('$name','$q1','$q2','$q3','$q4')";
			//close the connection
			mysqli_query( $conn, $sql );

			echo $done;
		}

		?>
		
			<fieldset>
				<legend><a href="addassessment.php">Add Assessment</a></legend>
				<form action="" method="POST" name="AddAssessment">
					<table class="table table-hover">

						<tr>
							<td><strong>Assessment Name  </strong>
							</td>
							<td>
								<input type="text" name="AsName">
							</td>

						</tr>
						<tr>
							<td><strong>Question 1</strong> </td>
							<td>
								<textarea name="Q1" rows="5" cols="150"></textarea>
							</td>
						</tr>
						<tr>
							<td><strong>Question 2</strong> </td>
							<td>
								<textarea name="Q2" rows="5" cols="150"></textarea>
							</td>
						</tr>
						<tr>
							<td><strong>Question 3</strong> </td>
							<td>
								<textarea name="Q3" rows="5" cols="150"></textarea>
							</td>
						</tr>
						<tr>
							<td><strong>Question 4</strong> </td>
							<td>
								<textarea name="Q4" rows="5" cols="150"></textarea>
							</td>
						</tr>
						<tr>
							<td><strong>Question 5</strong> </td>
							<td>
								<textarea name="Q5" rows="5" cols="150"></textarea>
							</td>
						</tr>
						
						<td><button type="submit" name="submit" class="btn btn-success" style="border-radius:0%">Add Assessment</button>
						</td>
						
					</table>
				</form>
			</fieldset>
		</div>
	</div>
