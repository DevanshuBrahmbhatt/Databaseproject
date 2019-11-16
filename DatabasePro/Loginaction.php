<!DOCTYPE HTML>
<html>
<body>


<?php 
 include_once("Connection.php"); 
 
 session_start(); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 
 
 $inUserId = $_POST["collegeId"];  
 $inPassword = $_POST["password"]; 



$sql = "SELECT collegeId,semester,password FROM signup where collegeId='$inUserId'  ";
//echo "$sql";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
		  
		  
       $collegeId= $row["collegeId"];
		$password=$row["password"];
		$semester=$row["semester"];
		//echo "$hod";
		
		
		if($password==$inPassword){
			
		if($semester!="0"){	
		
	$_SESSION['collegeId']=$inUserId;
	
	header("location: Student_1.php"); // user will be taken to profile page
	//echo"valid";
	//echo "$semester";
	
		}
		
		
		else{
			
		$_SESSION['collegeId']=$inUserId;
		header("location: UpdateDetain.php");
		//header("location: hod.php");
		//	echo "$semester";
		//echo"detain";	
		 
		}
	}
		
		
		
		
	else
		{   
				echo "Incorrect collegeId or password"; 
			 header("location: Login.php");
		}
 
		
		
    }
    
} 

else{
	echo"erro in connection";
}
}
   ?>
 