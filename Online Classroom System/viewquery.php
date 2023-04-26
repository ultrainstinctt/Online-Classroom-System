<?php
		session_start();

	  if(!isset($_SESSION["email"])) {
        header("Location: index.php");
        exit();
    }
	
$name=$_SESSION[ "email" ] ;


?><?php include('studenthead.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-2"></div>

		<div class="col-md-8">
			<h3> Welcome <a href="welcomestudent.php" <?php echo "<span style='color:red'>".$name." </span>";?> </a></h3>
			<?php 

			include('db.php');
			
			//below query will print the existing record of query
			$sql="SELECT * FROM query WHERE email='$name'";
			$rs=mysqli_query($conn,$sql);
			echo "<h2 class='page-header'>Query View</h2>";
			echo "<table class='table table-striped table-hover' style='width:100%'>
			<tr>
			<th>#</th>
			<th>Query</th>
			<th>Answer</th>						
			</tr>";
			$count=1;
			while($row=mysqli_fetch_array($rs))
			{
			?>
			<tr>
				<td>
					<?php echo $count;?>
				</td>
				
				<td>
					<?php echo $row['query'];?>
				</td>
				<td>
					<?php echo $row['ans'];?>
				</td>
			</tr>
			<?php
			$count++; }
			?>
			</table>
			<a href="askquery.php?eid=<?php echo $name;  ?>"> <button  href="" type="submit" class="btn btn-success" style="border-radius:0%">Ask New Query</button></a>
		</div>

		<div class="col-md-2"></div>
	</div>
