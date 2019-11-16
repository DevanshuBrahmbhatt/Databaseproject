<?php
include_once('Connection.php');

/* Get username */
$user_id = $_POST['user_id'];

/* Query */
$query = "select count(*) as cntUser from faculty_signup where user_id='$user_id'";



$result = mysqli_query($conn,$query);

$row = mysqli_fetch_array($result);

$count = $row['cntUser'];



echo $count;



?>
