<?php

include 'Connection.php';




    if(isset($_POST['submit'])) {
		
		
		if(!empty($_POST['f_id'])){
				
	 foreach ($_POST['f_id'] as $f_id =>$c){ 
		
		
		$message=$_POST['message'];
		$f_id=$_POST['f_id']  ; 
		
	
		//
		//echo "$f_id";
		
		
		
		
		echo $c['f_id'];
		$sql = "SELECT * FROM faculty_signup where f_id=".$c['f_id'];
		$result = $conn->query($sql);
		echo "$sql";
	


		if ($result!=Null ){
	
				if ($result->num_rows > 0) {
				  while($row = $result->fetch_assoc()) {
					  
					$name=$row["name"];  
				   $phone= $row["phoneno"];
					
				  }
				  
			}



 //Replace with your username
$user = "Devanshu";

// Replace with your API KEY (We have sent API KEY on activation email, also available on panel)
$apikey = "HHAeKv9AzvP5u2AuH9FO"; 

// Replace if you have your own Sender ID, else donot change
$senderid  =  "MYTEXT"; 

// Replace with the destination mobile Number to which you want to send sms
$mobile  =  $phone; 

// Replace with your Message content
$message   =  $message; 
$message = urlencode($message);

// For Plain Text, use "txt" ; for Unicode symbols or regional Languages like hindi/tamil/kannada use "uni"
$type   =  "txt";

$ch = curl_init("http://smshorizon.co.in/api/sendsms.php?user=".$user."&apikey=".$apikey."&mobile=".$mobile."&senderid=".$senderid."&message=".$message."&type=".$type.""); 
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);      
    curl_close($ch); 

// Display MSGID of the successful sms push
//echo $output;






// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md


if($output==true){
	
	
	/*<script>
	
	alert('Your Message Sent Sucessfully');
	</script>*/
	
	
	
	header('Location:hod.php');
	
}

else{
	echo "There is some error for sending message please try after some time";
	 header('Location:Faculty_Contact.php');
	
}




}

	 }
		 
	 }

	}
?>

