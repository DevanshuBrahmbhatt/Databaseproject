<?php
include_once('Connection.php');

/* Get username */
$username = $_POST['username'];

/* Query */
$query = "select count(*) as cntUser from signup where username='$username'";



$result = mysqli_query($conn,$query);

$row = mysqli_fetch_array($result);

$count = $row['cntUser'];



echo $count;



?>
