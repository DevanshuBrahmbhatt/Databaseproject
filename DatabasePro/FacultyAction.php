<?php

include 'Connection.php';



echo "suceess";
    
   
    if(isset($_POST['submit']))
	{
		
	$f_name=$_POST['f_name'];	
	$f_init=$_POST['f_init'];
	$d_no = $_POST['department'];
	$sem_no = $_POST['semester'];
    $sub_id = $_POST['subject'];
	$topic=$_POST['topic'];
	$myfile=$_POST['myfile'];

	$filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'faculty_uploads/' . $filename;

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
			
         $sql="insert into faculty  (d_no,sem_no,sub_id,f_name,f_init,topic,file )
 values('$d_no','$sem_no','$sub_id','$f_name','$f_init','$topic','$filename')";
 	
            
			if($conn->query($sql)==TRUE)
			{
				echo"sucess";
				header("Location:Faculty_Show.php?f_name='$f_name' ");
			}
			
        } else {
     echo "error to create database ". $conn->error;
}
    }

	


$conn->close();

}

?>
