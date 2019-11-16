<?php

require_once 'C:\Users\devan\vendor\twilio\sdk\Twilio\autoload.php'; 
 
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'ACf0e148dba22ea345f0e8fb57952b9037';
$auth_token = 'c778ddc4e137ef7e4d265ca6cfe8c0f6';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+18057166521";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+919601100352',
    array(
        'from' => $twilio_number,
        'body' => 'I sent this message in under 10 minutes!'
    )
);

?>
