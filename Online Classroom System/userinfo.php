<?php
session_start();

  if(!isset($_SESSION["email"])) {
        header("Location: index.php");
        exit();
    }
	
$name=$_SESSION[ "email" ] ;


?>
<!DOCTYPE  HTML>




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
                        <a href="welcomestudent">Home</a>
                    </li>
                   
                    <li>
                        <a href="#">Contact</a>
                    </li>
					 <li>
                       <a href="logout.php"><span class="glyphicon glyphicon-off title=" title="logout"></span> </a>
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
			<!--Welcome page for student-->
			
			<h3> Welcome <?php echo "<span style='color:red'>".$name."</span>";?></h3>
			
				<a href="studentdetails.php?myds=<?php echo $name;  ?>"> <button type="submit" class="btn btn-success" style="border-radius:0%;" title="My Details"><i class="fa fa-user"></i> My Profile</button></a>
			
			<a href="takeassessment.php?seno=<?php echo $name; ?>"> <button  type="submit" class="btn btn-success" style="border-radius:0%;" ><i class="fa fa-pencil-square"></i> Take Assessment</button></a>

			<a href="viewresult.php?seno=<?php echo $sEno;  ?>"> <button  href="" type="submit" class="btn btn-success" style="border-radius:0%;"><i class="fa fa-file"></i> View Results</button> </a>

			<a href="askquery.php?eid=<?php echo $name;  ?>"> <button  href="" type="submit" class="btn btn-success" style="border-radius:0%;"><i class="fa fa-question"></i> Ask Query</button></a>

			<a href="viewquery.php?eid=<?php echo $name;  ?>"> <button  href="" type="submit" class="btn btn-success" style="border-radius:0%;"><i class="fa fa-question-circle"></i> My Query</button> </a>
			
			<a href="viewvideostu.php?myds=<?php echo $name;  ?>"> <button  href="" type="submit" class="btn btn-success" style="border-radius:0%;"><i class="fa fa-video-camera"></i> Videos (E-Learn)</button></a>

			<a href="ulogout.php"><button  href="" type="submit" class="btn btn-danger" style="border-radius:0%">Logout</button></a>

		</div>
	</div>