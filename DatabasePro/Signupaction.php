<?php

include 'Connection.php';




    
   
    if(isset($_POST['submit']))
	{
	$username = $_POST['username'];
	$collegeId = $_POST['collegeId'];
    $email = $_POST['email'];
	$password=$_POST['password'];
	$d_no=$_POST['d_no'];
	$phone=$_POST['phone'];
	$semester=$_POST['semester'];
	
	
    
 $sql="insert into signup  (username,collegeId,semail,password,d_no,phone,semester)
 values('$username','$collegeId','$email','$password','$d_no','$phone','$semester')";
 
 
if($conn->query($sql)==TRUE)
{
    echo"sucess";
    header('Location:index.php');
}

 else {
     echo "error to create database ". $conn->error;
}

$conn->close();

}

?>
