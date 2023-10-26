<?php

session_start();
  if(!isset($_SESSION['fid'])) {
        header("Location: index.php");
        exit();
    }
$fid = $_SESSION[ "fid" ];

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Classroom</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/ 5shiv/3.7.0/ 5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<header>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Online Classroom</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="welcomefaculty">Home</a>
                    </li>
                      
                    
					 <li>
                        <a href="logoutfaculty"><span class="glyphicon glyphicon-off title=" title="logout"></span> </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</header>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3> Welcome Faculty : <a href="welcomefaculty.php" ><span style="color:#FF0004"> <?php echo $fid; ?></span></a> </h3>
			
			<?php
		include( "db.php" );
		if ( isset( $_REQUEST[ 'deleteid' ] ) ) {

			//getting data from another page
			$deleteid = $_GET[ 'deleteid' ];
			$sql = "DELETE FROM `examdetails` WHERE ExamID = $deleteid";
			if ( mysqli_query( $connect, $sql ) ) {
				echo "
						<br><br>
						<div class='alert alert-success fade in'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<strong>Success!</strong> Assessment details deleted.
						</div>
						";
			} else {
				//error message if SQL query fails
				echo "<br><Strong>Assessment Details Updation Faliure. Try Again</strong><br> Error Details: " . $sql . "<br>" . mysqli_error( $conn );
			}
		}
		//close the connection
		mysqli_close( $conn );
		?>
			
			<?php 
				
				include('db.php');
			
				$sql="SELECT * FROM `examdetails`";
				$rs=mysqli_query($conn,$sql);
				echo "<h2 class='page-header'>Assessment Details</h2>";
				echo "<table class='table table-striped table-hover' style='width:100%'>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Ques.1</th>
					<th>Ques.2</th>
					<th>Ques.3</th>
					<th>Ques.4</th>
					
					<th >Actions</th>		
				</tr>";
				$cnt = 1;
				while($row=mysqli_fetch_array($rs))
				{
				?>
			<tr>
				<td>
					<?PHP echo $cnt;?>
				</td>
				<td>
					<?PHP echo $row['ExamName'];?>
				</td>
				<td>
					<?PHP echo $row['Q1'];?>
				</td>
				<td>
					<?PHP echo $row['Q2'];?>
				</td>
				<td>
					<?PHP echo $row['Q3'];?>
				</td>
				<td>
					<?PHP echo $row['Q4'];?>
				</td>
				
				
				<td><a href="manageassessment.php?deleteid=<?php echo $row['ExamID']; ?>"> <input type="button" Value="Delete"  class="btn btn-danger btn-sm" style="border-radius:0%"  data-toggle="modal" data-target="#myModal"></a>
				<a href="manageassessment2.php?editassid=<?php echo $row['ExamID']; ?>"> <input type="button" Value="Edit"  class="btn btn-success btn-sm" style="border-radius:0%"  data-toggle="modal" data-target="#myModal"></a>
				
				</td>
			</tr>
			<?php
		$cnt++;	}
			?>	
			</table>

		
			
		</div>
	</div>
	