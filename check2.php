<?php

$dbhost='localhost';
$dbusername='root';
$dbpassword='';
$dbname='kpcproject_2021';
session_start();
$name=$_POST["Username"];
$adharno=$_POST["Uadhar"];
$email=$_POST["Uemail"];
$dob=date('y-m-d',strtotime($_POST["dob"]));
$votercardno=$_POST["Uvotercard"];
 $phonenumber=$_POST["UPhonenumber"];
 $pass=$_POST["Upassword"];
    
    
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
$query="update registration set adharno='".$adharno."', dob='".$dob."', votercardno='".$votercardno."' where email='".$email."'";

$dbrun=mysqli_query($link,$query);
if(!$dbrun)
{
  
  
  die('db not found:'.mysqli_connect_error());
}       
     else
     {
        echo "<a href='login.php'> CLICK</a>";
     }
?>