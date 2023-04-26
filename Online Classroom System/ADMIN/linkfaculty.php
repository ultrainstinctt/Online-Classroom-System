		<?php
$dbhost='localhost';
$dbusername='root';
$dbpassword='';
$dbname='xyz';
if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
session_start();
				$tempfname = $_POST[ 'fname' ];
				$tempfaname = $_POST[ 'faname' ];
				$tempaddrs = $_POST[ 'addrs' ];
				$tempgender = $_POST[ 'gender' ];
				$tempphno = $_POST[ 'phno' ];
				$tempjdate = $_POST[ 'jdate' ];
				$tempcity = $_POST[ 'city' ];
				$temppass = $_POST[ 'pass' ];
				$tempcpass = $_POST[ 'cpass' ];
				if($temppass==$tempcpass)

{ 
    echo "name=" .$tempfname ;
    echo "address=".$tempaddrs;
    echo "city=".$tempcity;
    echo "phonenumber=".$tempphno;
	  echo "gender=" .$tempgender;
	 echo  "date=".$tempjdate ;
    echo "password=" .$temppass;

    $link=mysqli_connect($dbhost,$dbusername,$dbpassword);
    if(!$link)
    {
     die('not connected:'.mysqli_connect_error());
    }
    $db_select=mysqli_select_db($link,$dbname);
    if(!$db_select)
    {
     die('can not use db:'.mysqli_connect_error());
    }
				



   $query= "INSERT INTO `facultytable`( `FName`, `FaName`, `Addrs`, `Gender`, `JDate`, `City`, `Pass`, `PhNo`) VALUES ('".$tempfname."', '".$tempfaname."', '".$tempaddrs."','".$tempgender."', '".$tempjdate."', '".$tempcity."' , '".$temppass."','".$tempphno."')";
   $dbrun=mysqli_query($link,$query);
   if(!$dbrun)
  {
      die('db not found:'.mysqli_connect_error());
  }
    
   else{
    $_SESSION['fname']=$tempfname;
     $_SESSION['phno']=$tempphno;
    $_SESSION['pass']=$temppass;

  	header("Location: fdtel.php");
	
   }
}
  else
{
   echo "something went wrong check your details";
}
	
	}


			?>