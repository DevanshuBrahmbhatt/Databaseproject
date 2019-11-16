<?php
session_start();
include '../Connection.php';



    
   
    if(isset($_POST['submit']))
	{
		$message=$_POST['message'];
		$f_id=$_POST['f_id']  ; 
		$purpose=$_POST['purpose'];
		$collegeId=$_SESSION['collegeId'];
	
	
    
 $sql="select email from faculty_signup where f_id='$f_id'  limit 1 ";
 $result=$conn->query($sql);
 
 if ($result!=Null ){
	
				if ($result->num_rows > 0) {
				  while($row = $result->fetch_assoc()) {
					  
					$email=$row["email"];  
				   echo "$email";
					
				  }
				  
			}
 
 }

 $sql1="select semail from signup where collegeId='$collegeId' limit 1" ;
  $result1=$conn->query($sql1);
  if ($result1!=Null ){
	
				if ($result1->num_rows > 0) {
				  while($row = $result1->fetch_assoc()) {
					  
					$semail=$row["semail"];  
				   echo "$semail";
					
				  }
				  
			}
 
 }

$to_email =$email;
$subject = $purpose;
$message = $message;
$headers = 'From:"'.$semail.'"';

if(mail($to_email,$subject,$message,$headers)){echo "send";}
else{echo "not send";}
 
 
 
 
$conn->close();


 }
?>