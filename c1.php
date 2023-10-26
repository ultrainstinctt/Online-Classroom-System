<?php
$dbhost='localhost';
$dbusername='root';
$dbpassword='';
$dbname='xyz';
if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
session_start();
$name=$_POST["name"];
$address=$_POST["address"];
$city=$_POST["city"];
$email=$_POST["email"];
$aemail=$_POST["cemail"];
$phno=$_POST["phone"];

$gender=$_POST["gender"];
$date=$_POST["dob"];
$pass=$_POST["psw"];
$cpass=$_POST["psw-repeat"];


if($pass==$cpass && $email==$aemail)

{ 
    echo "name=" .$name;
    echo "address=".$address;
    echo "email=" .$email;
    echo "city=".$city;
    echo "phonenumber=".$phno;
	  echo "gender=" .$gender;
	 echo  "date=".$date;
    echo "password=" .$pass;

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

   $query="INSERT INTO `register`( `name`, `address`, `city`, `email`, `phone`, `dob`, `gender`, `password`) VALUES('".$name."','".$address."','".$city."','".$email."','".$phno."','".$date."','".$gender."','".$pass."')";
   $dbrun=mysqli_query($link,$query);
   if(!$dbrun)
  {
      die('db not found:'.mysqli_connect_error());
  }
    
    $_SESSION['email']=$email;
    $_SESSION['name']=$name;
    $_SESSION['phone']=$phno;
    $_SESSION['psw']=$pass;

    echo '<a href="studentdetails.php"> CLICK</a>';
}
  else
{
   echo "something went wrong check your details";
}
	
	}
  


?>