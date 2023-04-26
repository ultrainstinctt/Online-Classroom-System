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
			include( 'db.php' );
			$make = $_GET[ 'editassid' ];
			//selecting data form assessment details table form database
			$sql = "SELECT * FROM examdetails WHERE ExamID=$make";
			$rs = mysqli_query( $conn, $sql );
			while ( $row = mysqli_fetch_array( $rs ) ) {
				?>
			<fieldset>
				<legend><a href="manageassessment.php" >Edit Assessment</a></legend>
				<form action="" method="POST" name="UpdateAssessment">
					<table class="table table-hover">

						<tr>
							<td><strong>Exam ID</strong>
							</td>
							<td>
								<?php $ExamID=$row['ExamID']; echo $ExamID; ?>
							</td>

						</tr>
						<tr>
						<td><strong>Exam Name</strong>
							</td>
							<td>
							<textarea name="ExamName" class="form-control" rows="1" cols="50"><?php $ExamName=$row['ExamName']; echo $ExamName; ?></textarea>
							</td>
							
						</tr>	
						<tr>
							<td><strong>Q1</strong>
							</td>
							<td>
							<textarea name="Q1" rows="5" class="form-control" cols="150"><?php $Q1=$row['Q1']; echo $Q1; ?></textarea>
							</td>
						</tr>	
							<tr>
							<td><strong>Q2</strong>
							</td>
							<td>
							<textarea name="Q2" rows="5" class="form-control" cols="150"><?php $Q2=$row['Q2']; echo $Q2; ?></textarea>
							</td>
						</tr>	
							<tr>
							<td><strong>Q3</strong>
							</td>
							<td>
							<textarea name="Q3" rows="5" class="form-control" cols="150"><?php $Q3=$row['Q3']; echo $Q3; ?></textarea>
							</td>
						</tr>	
							<tr>
							<td><strong>Q4</strong>
							</td>
							<td>
							<textarea name="Q4" rows="5" class="form-control" cols="150"><?php $Q4=$row['Q4']; echo $Q4; ?></textarea>
							</td>
						</tr>	
							
							
						<td><button type="submit" name="update" class="btn btn-success" style="border-radius:0%">Update</button>
						</td>
						<?php
						}
						?>
						<?php 

							if(isset($_POST['update']))
							{
							
							$E_name= $_POST['ExamName'];
							$Q_1= $_POST['Q1'];
							$Q_2= $_POST['Q2'];
							$Q_3= $_POST['Q3'];
							$Q_4= $_POST['Q4'];
						

							$sql = "UPDATE `examdetails` SET ExamName='$E_name' , Q1='$Q_1' , Q2='$Q_2' , Q3='$Q_3', Q4='$Q_4' WHERE ExamID=$make";

							if (mysqli_query($conn, $sql)) {
								echo "
								<br><br>
								<div class='alert alert-success fade in'>
								<a href='manageassessment.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
								<strong>Success!</strong> Assessment Updated.
								</div>
								";
								} else {
								//error message if SQL query fails
								echo "<br><Strong>Assessment Updation Faliure. Try Again</strong><br> Error Details: " . $sql . "<br>" . mysqli_error($conn);

								//close the connection
								mysqli_close($conn);
								}
							}
							?> 
					</table>
				</form>
			</fieldset>
		</div>
	</div>
