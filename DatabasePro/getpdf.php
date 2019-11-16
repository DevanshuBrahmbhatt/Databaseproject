


<?php

include_once('Connection.php');

	 
/*if(!isset($_GET['pdf_id'])){
	
	echo "error";
}
	else{
	$pdf_id=$_GET['pdf_id'];
	


$sql ="SELECT * FROM pdf WHERE pdf_id= '$pdf_id'  ";
//echo "$sql";

$result2 = mysqli_query($conn, $sql);    // query execution

$row = mysqli_fetch_object($result2); // returns the current row of the resultset

$pdf_content = $row->pdf; // Put contents of pdf into variable

$fileName = time().".pdf "; // create the unique name for pdf generated	

//download file from database and allows you to save in your system

header('Content-type:application/pdf ');

header('Content-Disposition:attachment; filename=' .$fileName  );

print $pdf_content;

}*/


if (isset($_GET['pdf_id'])) {
    $pdf_id = $_GET['pdf_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM pdf WHERE pdf_id= '$pdf_id' ";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'admin/paper_uploads/' . $file['file'];
	echo "$filepath";
	
	
	//echo "$filepath";

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
     // header('Content-Length: ' . filesize('faculty_uploads/' . $file['file']));
        readfile('admin/paper_uploads/' . $file['file']);

        // Now update downloads count
      //  $newCount = $file['downloads'] + 1;
        //$updateQuery = "UPDATE faculty SET downloads=$newCount WHERE id=$id";
        //mysqli_query($conn, $updateQuery);
        //exit;
    }

}



?>





