<!DOCTYPE HTML>
<html>
<body>


<?php 
 include_once("../Connection.php"); 
 
 session_start(); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 
 
 $inUsername = $_POST["username"];  
 $inPassword = $_POST["password"]; 
 echo "$inUsername";
 
 
 $stmt= $conn->prepare("SELECT admin_id, password FROM admin WHERE admin_id = ?"); //Fetching all the records with input credentials
 $stmt->bind_param("s", $inUsername); 
 $stmt->execute();
 $stmt->bind_result($UsernameDB,$PasswordDB); 
   
 
 if ($stmt->fetch() && $inPassword==$PasswordDB) 
 {
	 
	 
	// $_SESSION['usename'] = x;
	 
	 
	 
	echo "Incorrect username or password";  
	$_SESSION['admin_id']=$inUsername;
	//Storing the username value in session variable so that it can be retrieved on other pages
 header("location:index.php"); // user will be taken to profile page
 }
 else
 {
	
    echo "Incorrect username or password"; 
	  header("location:Login.php");
	  echo "Incorrect username or password"; 
   ?>
 
   <a href="Index.php">Login</a>
       <?php 
 } 
 } 
       ?>
 </body> 