<?php

include 'Connection.php';




    
   
    if(isset($_POST['submit']))
	{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$number=$_POST['number'];
    $email = $_POST['email'];
	$message=$_POST['message'];


	
	
    
 $sql="insert into contact  (firstname,lastname,number,email,message)
 values('$firstname','$lastname','$number','$email','$message')";
 
 
if($conn->query($sql)==TRUE)
{
	
	
	
	echo "<script type='text/JavaScript'> ";
              
	echo "alert('Your FeedBack is Recevied')";
	
	echo "</script> ";
    
    header('Location:Student_1.php');
	
}

 else {
     echo "error to create database ". $conn->error;
}

$conn->close();

}

?>
