<?php
include_once('Connection.php');

/* Get username */
$collegeId = $_POST['collegeId'];

/* Query */
$query = "select count(*) as cntUser from signup where collegeId='$collegeId'";



$result = mysqli_query($conn,$query);

$row = mysqli_fetch_array($result);

$count = $row['cntUser'];



echo $count;



?>
