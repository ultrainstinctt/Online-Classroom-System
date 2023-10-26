<?php

session_start();
  if(!isset($_SESSION["fid"])) {
        header("Location: index.php");
        exit();
    }
	

?>




    <table border="3" width="100%">
    <tr>
    <th>ID</th>
	<th>name</th>
	 <th>email</th>
    <th>password</th>
    <th>city</th>
	<th>dob</th>
	<th>gender</th>
    <th>addrees</th>
	<th>phoneno</th>
	<th colspan="2" >operation</th>
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
	  
	  $sql="SELECT * FROM `register` ORDER BY  id ";
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
			
     <td><strong>". $result["name"]."</strong></td>
	<td>". $result ["email"]."</td>
	<td>". $result ["password"]."</td>
	
     <td>". $result ["city"]."</td>
	 <td>". $result ["dob"]."</td>
	<td>". $result ["gender"]."</td>
    <td>". $result ["address"]."</td>
	  <td>". $result ["phone"]."</td>
    <td><a href ='update.php?id=$result[id]&phno=$result[phone]&email=$result[email]&city=$result[city]&name=$result[name]&dob=$result[dob]&address=$result[address]'>edit</a></td>
	
	<td><a href= 'delete.php?id=$result[id]&email=$result[email]'>delete<a></td>

            
	  </tr>";
          
          
       }
    }
	
    ?>
	<a href="logout.php"><button  href="" type="submit" class="btn btn-danger" style="border-radius:0%">Logout</button></a>
    </table>