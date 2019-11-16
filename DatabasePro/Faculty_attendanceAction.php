<?php

include 'Connection.php';



    
   
    if(isset($_POST['submit']))
	{
		
	 $subject = $_POST['subject'];
	$exam_type=$_POST['exam_type'];
	$f_id=$_POST['f_id'];
	$section=$_POST['section'];
	$myfile=$_POST['myfile'];
	
	


	
	

	
	
  

$api_key = "t3a0d05fb541e79fa97ad9a3e639f5f6";
$url = 'https://api.sqlify.io/v1/pipelines/sqlify/convert/run';

$fields = [
  'file' =>
     new \CurlFile('  ."$myfile".  ', 'application/octet-stream'),
  'options[to]' => 'xslx',
  'return_output' => 'true'
];

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POST => 1,
  CURLOPT_POSTFIELDS => $fields,
  CURLOPT_HTTPHEADER => [
    'X-Api-Key: ' . $api_key
  ]
]);

$response = curl_exec($curl);

print $response;
 
 
 
 
 
if($response==TRUE)
{
    echo"sucess";
    //header('Location:Faculty_attendance.php');
}

 else {
     echo "error is generated ". $conn->error;
}

$conn->close();

}

?>
