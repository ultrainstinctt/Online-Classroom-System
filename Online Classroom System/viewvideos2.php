	<?php
session_start();

  if(!isset($_SESSION["email"])) {
        header("Location: index.php");
        exit();
    }
	
$name = $_SESSION[ "email" ];
?>

<?php include('studenthead.php'); ?>

<div class="container">
	<div class="row">
		

		<div class="col-md-12">
			<h3> Welcome <a href="userinfo.php" <?php echo "<span style='color:red'>".				$name." </span>";?> </a></h3>
			
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
			$video_id= $_GET['viewid'];
			$sql="SELECT * FROM video WHERE V_id=$video_id";
			$rs=mysqli_query($conn,$sql);?>			
			<?php
			while($row=mysqli_fetch_array($rs))
				{
				?>
					<tr>
						<td>
							<h2>Title: <?PHP echo $row['V_Title'];?></h2>
						</td>
						<br>
						
						<td>
							<?PHP echo $row['V_Url'];?>
						</td>
						<br>
						<td>
							<p> Video Description <?PHP echo $row['V_Remarks'];?> </p>
						</td>
						<br>
						<td><a href="viewvideostu.php"> <input type=	"button" Value="Back"  class="btn btn-info" style="border-radius:0%"  data-toggle="modal" data-target="#myModal"></a>
						</td>
					</tr>
				<?php
				}
				?>
		
	</div>

		
	</div>
