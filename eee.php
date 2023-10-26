<?php
session_start();
   $email=$_SESSION['email'];
    $name=$_SESSION['name'];
   $phno =$_SESSION['phone'];
    $pass  = $_SESSION['psw'];
  if(!isset($_SESSION["email"])) {
        header("Location: login.php");
        exit();
    }
//$email = $_SESSION[ "email" ];
  
   
?>




    <table border="3" width="100%">
    <tr>
    <th>ID</th>
	<th>name</th>
	 <th>email</th>
    <th>password</th>
    <th>city</th>
    <th>addrees</th>
	<th>phoneno</th>
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
	  
	  $sql="SELECT * FROM `register`  ";
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
		 
            <th scope='row'>".$result["id"] ."</th>
			
     <td>". $result["name"]."</td>
	<td>". $result ["email"]."</td>
	<td>". $result ["password"]."</td>
 <td>". $result ["city"]."</td>
		<td>". $result ["address"]."</td>
	 <td>". $result ["phone"]."</td>
    
	

            
	  </tr>";
          
          
       }
    }
    ?>
	
    </table>