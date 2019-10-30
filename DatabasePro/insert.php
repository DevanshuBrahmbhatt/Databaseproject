
<?php
include 'SignUp.php';
include 'Connection.php';





    
   
    if(isset($_POST['submit']))
	{
	$field_0 = $_POST['field_0'];
    $country = $_POST['country'];
    $description = $_POST['description'];
	$designation = $_POST['designation'];
	$points= $_POST['points'];
	$province = $_POST['province'];
	$region_1 = $_POST['region_1'];
	$region_2 = $_POST['region_2'];
	$variety = $_POST['variety'];
	$winery = $_POST['winery'];

 

	
    
 $sql="insert into data  (field_0,country,description,designation,points,province,region_1,region_2,variety,winery)
 values('$field_0','$country','$description','$designation','$points','$province','$region_1','$region_2','$variety','$winery')";
 
 
if($conn->query($sql)==TRUE)
{
    
    header('Location:Display.php');
}

 else {
     echo "error to create database ". $conn->error;
}

$conn->close();

}
?>
