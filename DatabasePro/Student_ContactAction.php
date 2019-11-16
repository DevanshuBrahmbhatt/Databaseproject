<?php


include 'Connection.php';




    if(isset($_POST['submit'])) {
		
		
		if(!empty($_POST['semester'])){
				
	 foreach ($_POST['semester'] as $semester =>$c){ 
		
		
		$message=$_POST['message'];
		$semester=$_POST['semester']; 
		
	
		//
		//echo "$f_id";
		
		
		
		
		//echo $c['semester'];
		
		
		$sql = "SELECT * FROM signup where semester=".$c['semester'];
		
		
		$result = $conn->query($sql);
		
		if($result==true){header('Location:hod.php');}
		
		else{header('Location:hod.php');}
		//echo "$sql";
	


		if ($result!=Null ){
	
				if ($result->num_rows > 0) {
				  while($row = $result->fetch_assoc()) {
					  
					$name=$row["name"];  
				   $phone= $row["phoneno"];
					
				  }
				  
			}



// Replace with your username
$user = "devanshu";

// Replace with your API KEY (We have sent API KEY on activation email, also available on panel)
$apikey = "HHAeKv9AzvP5u2AuH9FO"; 

// Replace if you have your own Sender ID, else donot change
$senderid  =  "MYTEXT"; 

// Replace with the destination mobile Number to which you want to send sms
$mobile  =  "9773056943"; 

// Replace with your Message content
$message   =  "Testing SMS API"; 
$message = urlencode($message);

// For Plain Text, use "txt" ; for Unicode symbols or regional Languages like hindi/tamil/kannada use "uni"
$type   =  "txt";

$ch = curl_init("http://smshorizon.co.in/api/sendsms.php?user=".$user."&apikey=".$apikey."&mobile=".$mobile."&senderid=".$senderid."&message=".$message."&type=".$type.""); 
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);      
    curl_close($ch); 

// Display MSGID of the successful sms push
echo $output;



if($output==true){
	
	header('Location:hod.php');
	
	//header('Location:professor.php');
}

else{
	//echo "There is some error for sending message please try after some time";
	header('Location:Faculty_Contact.php');
	
}




}

	 }
		 
  }
}

?>

