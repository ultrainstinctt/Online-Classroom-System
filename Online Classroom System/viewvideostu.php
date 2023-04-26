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
			<h3> Welcome <a href="userinfo.php" <?php echo "<span style='color:red'>".				$name ."</span>";?> </a></h3>
			
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
			$sql="SELECT * FROM video";
			$rs=mysqli_query($conn,$sql);
			echo "<h2 class='page-header'>Videos Details</h2>";
			echo "<table class='table table-striped table-hover'  border='3'style='width:100%'>
			<tr>
				<th>#</th>
				<th>Video Title</th>
				<th>Description</th>
				<th>View</th>		
			</tr>";
			$count=1;
			while($row=mysqli_fetch_array($rs))
			{
			?>
		<tr>
			<td>
				<?PHP echo $count;?>
			</td>
			<td>
				<?PHP echo $row['V_Title'];?>
			</td>
			<td>
				<?PHP echo $row['V_Remarks'];?>
			</td>
							
			<td><a href="viewvideos2.php?viewid=<?php echo $row['V_id']; ?>"> <input type="button" Value="View" style="border-radius:0%"  class="btn btn-info btn-sm"  data-toggle="modal" data-target="#myModal"></a>
			</td>
		</tr>
		<?php
		$count++;}
		?>	
		</table>
		
	</div>

		
	</div>
	