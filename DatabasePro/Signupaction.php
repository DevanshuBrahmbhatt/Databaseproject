<?php

include 'Connection.php';




    
   
    if(isset($_POST['submit']))
	{
	$username = $_POST['username'];
	$collegeId = $_POST['collegeId'];
    $email = $_POST['email'];
	$password=$_POST['password'];
	$d_no=$_POST['d_no'];
	
	
    
 $sql="insert into signup  (username,collegeId,email,password,d_no)
 values('$username','$collegeId','$email','$password','$d_no')";
 
 
if($conn->query($sql)==TRUE)
{
    echo"sucess";
    header('Location:Student_1.php');
}

 else {
     echo "error to create database ". $conn->error;
}

$conn->close();

}

?>
