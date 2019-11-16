<?php
$to = "devanshu.vguj@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: axyz16689@gmail.com";

if(mail($to,$subject,$txt,$headers)){
	
	echo "mail send";
}else{
	
	echo "cant send";
}

?>