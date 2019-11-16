<?php

include 'Connection.php';



echo "suceess";
    
   
    if(isset($_POST['submit']))
	{
	$department = $_POST['department'];
	$semester = $_POST['semester'];
    $subject = $_POST['subject'];
	$exam_type=$_POST['exam_type'];
	//$d_no=$_POST['d_no'];
	
	
    
 $sql="insert into demo  (department,semester,subject,exam_type)
 values('$department','$semester','$subject','$exam_type')";
 
 
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
