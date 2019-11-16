<?php

include_once('Connection.php');

if(isset($_POST["d_no"]) && !empty($_POST["d_no"])){
	
    //Get all state data
	$d_no=intval($_POST['d_no']);
	
    $query = $db->query("SELECT * FROM semester WHERE d_no = '$d_no' ");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select Semester</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['sem_no'].'">'.$row['semester'].'</option>';
        }
    }else{
        echo '<option value="">Sem not available</option>';
    }
}
 
if(isset($_POST["sem_no"]) && !empty($_POST["sem_no"])){
    //Get all city data
    $query = $db->query("SELECT * FROM subject WHERE semdept = ".$_POST['sem_no']."  ");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select city</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['sub_id'].'">'.$row['subname'].'</option>';
        }
    }else{
        echo '<option value="">subjectnot not available</option>';
    }
}
?>