<?php

require 'Send_Mail.php';
$to = "contact@dkmlabs.com";
$subject = "Test Mail Subject";
$body = "Hi<br/>Test Mail<br/>Amazon SES"; // HTML  tags
if(Send_Mail($to,$subject,$body))
    echo "Email sending...";
else
    echo "Nope, try again.";

?>
