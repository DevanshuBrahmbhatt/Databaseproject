<!DOCTYPE HTML>
<html>
<body>


<?php 
 include_once("Connection.php"); 
 
 session_start(); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 
 
 $inUserId = $_POST["user_id"];  
 $inPassword = $_POST["password"]; 



$sql = "SELECT user_id,password,hod FROM faculty_signup where user_id='$inUserId'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
		  
		  
       $user_id= $row["user_id"];
		$password=$row["password"];
		$hod=$row["hod"];
		//echo "$hod";
		
		
		if($password==$inPassword){
			
		if($hod!="1"){	
	$_SESSION['user_id']=$inUserId;
	header("location: professor.php"); // user will be taken to profile page
	//echo"prof";
	
		}
		
		else {
			
		$_SESSION['user_id']=$inUserId;
		header("location: hod.php");
		//echo"hod";	
		 
		}
	}
		
		
		
		
	else
		{   
				echo "Incorrect username or password"; 
				 header("location: Faculty_Login.php");
				  echo "Incorrect username or password"; 
			 
 }
 
		
		
    }
    
} 

else{
	echo"erro in connection";
}
}
   ?>
 
 </body>
 
 </html>