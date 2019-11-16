<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 

//require __DIR__ . 'vendor\autoload.php';
require_once 'vendor\twilio\sdk\Twilio\autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = "ACf0e148dba22ea345f0e8fb57952b9037"; 
$token  = "c778ddc4e137ef7e4d265ca6cfe8c0f6"; 
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create("whatsapp:+919409581600", // to 
                           array( 
								
                               "from" => "whatsapp:+919601100352", 
							
                               "body" => "with media working" 
							
                           ) 
                  ); 
 
print($message->sid);

?>