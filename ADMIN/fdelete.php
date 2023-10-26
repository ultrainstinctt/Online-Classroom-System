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
	//echo "succesfully connect";
}
	?>

<?php
	
		if ( isset( $_REQUEST[ 'deleteid' ] ) ) {
			
			$deleteid = $_GET[ 'deleteid' ];
			//delete faculty Query
			$sql = "DELETE FROM `facultytable` WHERE FID = $deleteid";

			if ( mysqli_query( $conn, $sql ) ) {
				echo "

					<br><br>
					<div class='alert alert-success fade in'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<strong>Success!</strong> Faculty Details has been deleted.
					</div>";
			} else {
				//error message if SQL query fails
				echo "<br><Strong>Faculty Details Updation Faliure. Try Again</strong><br> Error Details: " . $sql . "<br>" . mysqli_error( $conn );
			}
			//close the connection
			mysqli_close( $conn );
		}
		?>