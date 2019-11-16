<?php

include '../Connection.php';



//echo "suceess";
    
   
    if(isset($_POST['submit']))
	{
		
	$sub_id=$_POST['subject'];	
	$exam_id=$_POST['exam_type'];
	$myfile=$_POST['myfile'];
	$year=$_POST['year'];
	
	
	

	$filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'paper_uploads/'. $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
			
         $sql="insert into pdf  (sub_id,exam_id,year,file)
 values('$sub_id','$exam_id','$year','$filename')";
 	
            
			if($conn->query($sql)==TRUE)
			{
				echo"sucess";
				header("Location:admin.php");
			}
			
        } else {
     echo "error to create database ". $conn->error;
}
    }

	


$conn->close();

}

?>
