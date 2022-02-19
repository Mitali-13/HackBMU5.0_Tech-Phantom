<?php
require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account SID and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure
$sid = "";//Your AccountSid
$token = "";// Your AuthToken
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$message=$client->messages->create(
    // the number you'd like to send the message to
    '',//To number
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+1 959 214 4206',
        // the body of the text message you'd like to send
        'body' => 'Message from Twilio,We will call you soon.'
    ]
    );

if($message){
echo "message sent";
}
else{
    echo "message not sent";
}

?>
