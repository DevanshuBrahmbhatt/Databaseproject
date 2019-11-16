<?php

include_once('Connection.php');

if (isset($_GET['f_id'])) {
    $f_id = $_GET['f_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM faculty WHERE f_id=$f_id ";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'faculty_uploads/' . $file['file'];
	
	
	//echo "$filepath";

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
      // header('Content-Length: ' . filesize('faculty_uploads/' . $file['file']));
        readfile('faculty_uploads/' . $file['file']);

        // Now update downloads count
      //  $newCount = $file['downloads'] + 1;
        //$updateQuery = "UPDATE faculty SET downloads=$newCount WHERE id=$id";
        //mysqli_query($conn, $updateQuery);
        //exit;
    }

}
?>