 <?php
$servername= "localhost";
$username ="root";
$password ="";
$dbname="xyz";
$conn = mysqli_connect($servername, $username,$password,$dbname);

//die if connectionis not succesfull

if(!$conn)
{
	die("sorry we are failed to connect ".mysqli_connect_error( ));
}
else
{
	//echo "succesfully connect";


 error_reporting(0);
  $id=$_GET['id']; 
  $query="DELETE FROM `register` WHERE id='$id' ";
  $data=mysqli_query($conn,$query);
   if($data)
   {
	   echo"delete";
   }
   else
   {
	   
	   echo"failed";
   }
}
 
 
 ?>