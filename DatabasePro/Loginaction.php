<!DOCTYPE HTML>
<html>
<body>


<?php 
 include_once("Connection.php"); 
 
 session_start(); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 
 
 $inUsername = $_POST["username"];  
 $inPassword = $_POST["password"]; 
 
 
 
 $stmt= $conn->prepare("SELECT username, password FROM signup WHERE username = ?"); //Fetching all the records with input credentials
 $stmt->bind_param("s", $inUsername); 
 $stmt->execute();
 $stmt->bind_result($UsernameDB,$PasswordDB); 
   
 
 if ($stmt->fetch() && $inPassword==$PasswordDB) 
 {
	echo "Incorrect username or password";  
	$_SESSION['username']=$inUsername; //Storing the username value in session variable so that it can be retrieved on other pages
 header("location: Student_1.php"); // user will be taken to profile page
 }
 else
 {
	
    echo "Incorrect username or password"; 
	  header("location: Login	.php");
	  echo "Incorrect username or password"; 
   ?>
 
   <a href="Index.php">Login</a>
       <?php 
 } 
 } 
       ?>
 </body> 