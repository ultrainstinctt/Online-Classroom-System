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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

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

		<div class="col-md-12 text-center">
			<!--Welcome page for faculty-->
			<h3> Welcome Faculty : <a href="welcomefaculty.php" ><span style="color:#FF0004"> <?php echo $fid ; ?></span></h3>
			</a> 
			<a href="finfo.php?myfid=<?PHP echo $fid?>"><button  href="" type="submit" class="btn btn-primary" style="border-radius:0%"><i class="fa fa-user"></i> My Profile</button></a>
			<a href="studentdetails.php"><button  href="" type="submit" class="btn btn-primary" style="border-radius:0%"><i class="fa fa-graduation-cap"></i> Student Details</button></a>
			<a href="assessment.php"><button  href="" type="submit" class="btn btn-primary" style="border-radius:0%"><i class="fa fa-pencil-square"></i> Assessment Section</button></a>
			<a href="examDetails.php"><button  href="" type="submit" class="btn btn-primary" style="border-radius:0%"><i class="fa fa-file"></i> Publish Result</button></a>
			<a href="resultdetails.php"><button  href="" type="submit" class="btn btn-primary" style="border-radius:0%"><i class="fa fa-indent"></i> Edit Result</button></a>
			<a href="qureydetails.php"> <button  href="" type="submit" class="btn btn-primary" style="border-radius:0%"><i class="fa fa-question"></i> Student's Query</button>
			<a href="addvideo.php"> <button  href="" type="submit" class="btn btn-primary" style="border-radius:0%"><i class="fa fa-video-camera"></i> Videos</button>
			  	<a href="index.php"> <button  href="" type="submit" class="btn btn-primary" style="border-radius:0%"><i class="fa fa-file"></i> Notes</button>
			<a href="logout.php"><button  href="" type="submit" class="btn btn-danger" style="border-radius:0%">Logout</button></a>

		</div>



	</div>
		   </div>
		   
    <!-- /.container -->
<style>
.footer{background: #000; padding: 10px 0px; color: #fff;position: fixed;left: 0; right: 0;bottom: -10px;}
</style>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>

