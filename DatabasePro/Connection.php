
<?php
$localhost="localhost";
$user="root";
$password="";
$dbname="database";




$conn=new mysqli($localhost,$user,$password,$dbname);


if($conn->connect_error)
{
    
    die("connection failed".$conn->connect_error);
}

 else {
    
//echo "connected suceesfully";
     
 }

?>

