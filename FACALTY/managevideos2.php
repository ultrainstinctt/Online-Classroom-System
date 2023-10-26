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
	
						$servername = "localhost";
      $username = "root";
      $password = "";
      $database = "xyz";


      $conn = mysqli_connect($servername, $username, $password, $database);
 
      if (!$conn)
	  {
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
			$make = $_GET[ 'editassid' ];
			//selecting data form Video details table form database
			$sql = "SELECT * FROM video WHERE V_id=$make";
			$rs = mysqli_query( $conn, $sql );
			while ( $row = mysqli_fetch_array( $rs ) ) {
				?>
			<fieldset>
				<legend><a href="managevideos.php" >Update Videos</a></legend>
				<form action="" method="POST" name="UpdateVideo">
					<table class="table table-hover">

						<tr>
							<td><strong>Video ID</strong>
							</td>
							<td>
								<?php $V_id=$row['V_id']; echo $V_id; ?>
							</td>

						</tr>
						<tr>
						<td><strong>Video Title</strong>
							</td>
							<td>
							<textarea name="V_Title" rows="1" cols="50" class="form-control"><?php $V_Title=$row['V_Title']; echo $V_Title; ?></textarea>
							</td>
							
						</tr>	
						<tr>
							<td><strong>Video URL</strong>
							</td>
							<td>
							<textarea name="V_Url" rows="5" cols="150" class="form-control"><?php $V_Url=$row['V_Url']; echo $V_Url; ?></textarea>
							</td>
						</tr>
						<tr>
							<td><strong>Video Description</strong>
							</td>
							<td>
							<textarea name="V_Remarks" rows="5" cols="150" class="form-control"><?php $V_Remarks=$row['V_Remarks']; echo $V_Remarks; ?></textarea>
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
							
							$V_Title= $_POST['V_Title'];
							$V_Url= $_POST['V_Url'];
							$V_Remarks= $_POST['V_Remarks'];
							
							$sql = "UPDATE `video` SET V_Title='$V_Title' , V_Url='$V_Url' , V_Remarks='$V_Remarks' WHERE V_id=$make";

							if (mysqli_query($conn, $sql)) {
								echo "
								<br><br>
								<div class='alert alert-success fade in'>
								<a href='manageassessment.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
								<strong>Success!</strong> Videos Updated.
								</div>
								";
								} else {
								//error message if SQL query fails
								echo "<br><Strong>Video Updation Faliure. Try Again</strong><br> Error Details: " . $sql . "<br>" . mysqli_error($conn);

								//close the connection
								
								}
							}
							?> 
					</table>
				</form>
			</fieldset>
		</div>
	</div>
