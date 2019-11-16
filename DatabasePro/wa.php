<?php

//* Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.
require_once 'vendor\twilio\sdk\Twilio\autoload.php'; 

	
use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure
$sid    = "ACf0e148dba22ea345f0e8fb57952b9037";
$token  = "c778ddc4e137ef7e4d265ca6cfe8c0f6";
$twilio = new Client($sid, $token);

$message = $twilio->messages
                  ->create("whatsapp:+91", // to
                           array(
                               "from" => "whatsapp:+18057166521",
                               "body" => "aayo"
                           )
                  );

print($message->sid);
