<?php

include 'Connection.php';




    
   
    if(isset($_POST['submit']))
	{
	$name = $_POST['name'];
	$user_id = $_POST['user_id'];
	$d_no=$_POST['d_no'];
	$hod=$_POST['hod'];
    $email = $_POST['email'];
	$phoneno=$_POST['phoneno'];
	$password=$_POST['password'];

	
	
    
 $sql="insert into faculty_signup  (name,user_id,d_no,hod,email,phoneno,password)
 values('$name','$user_id','$d_no','$hod','$email','$phoneno','$password')";
 
 
if($conn->query($sql)==TRUE)
{
    //echo"sucess";
    //header('Location:index.php');
	
	if($hod=='1'){
		
		header('Location:hod.php');
	}
	
	else {
		
		header('Location:professor.php');
	}
	
}

 else {
     echo "error to create database ". $conn->error;
}

$conn->close();

}

?>
