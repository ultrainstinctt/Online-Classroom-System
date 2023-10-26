<?php

session_start();
  if(!isset($_SESSION["adminname"])) {
        header("Location: index.php");
        exit();
    }
	

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
                        <a href="welcomeadmin">Home</a>
                    </li>
					
                  <li>
                        <a href="logout.php">Logout</a>
                       
                    </li>			
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</header>


    <table border="3" width="100%">
    <tr>
    <th>ID</th>
	<th>Name</th>
	 <th>Father's Name</th>
    <th>Password</th>
    <th>City</th>
	<th>DOB</th>
	<th>Gender</th>
    <th>Addrees</th>
	<th>Phoneno</th>
	<th  colspan="2" >Operation</th>
 </tr>

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
	  
	  $sql="SELECT * FROM `facultytable`  ";
		$data = mysqli_query($conn,$sql);
	   	  $total = mysqli_num_rows($data);
	  
	  
if ($total == 0)

{
    die('db not found:'.mysqli_connect_error());

}
else
{
  
 
   while( ( $result= mysqli_fetch_assoc($data)) )
       {
          
           
         echo  "  <tr>
		 
            <th scope='row'>".$result["FID"] ."</th>
			
     <td>". $result["FName"]."</td>
	<td>". $result ["FaName"]."</td>
	<td>". $result ["Addrs"]."</td>
	
     <td>". $result ["Gender"]."</td>
	 <td>". $result ["JDate"]."</td>
	<td>". $result ["City"]."</td>
    <td>". $result ["Pass"]."</td>
	  <td>". $result ["PhNo"]."</td>
    <td><a href ='updatedetailsfromfaculty.php?FID=$result[FID]'>edit</a></td>
	
	<td><a href= 'fdelete.php?deleteid=$result[FID]'>delete<a></td>

            
	  </tr>";
          
          
       }
    }
	
    ?>
	</table>  <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p class="footer text-center" align= "center">Copyright &copy; Online Classroom   <strong></strong> project Made by <strong>Pratap Bhattacharjee  017516</strong></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
<style>
.footer{background: #000; padding: 10px 0px; color: #fff;position: fixed;left: 0; right: 0;bottom: 0;}
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
