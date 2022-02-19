<?php
require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account SID and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure
$sid = "ACd63849de91fe179f35d0870ce1ec1853";
$token = "e8565273e9948e7adddca56315bea019";
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$message=$client->messages->create(
    // the number you'd like to send the message to
    '+918318215727',
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