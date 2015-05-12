<?php
require '../phpmailer/Send_Mail.php';
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'contact@dkmlabs.com'; // Add the email where you will receive messages sent through the contact form
$email_subject = "Contact form submitted by:  $name";
$email_body = "<p>You have received a new message from your website.</p>\r\n".
				  "Their Name: $name<br/>\r\n ".
				  "Email Address: $email_address<br/>\r\n".
                  "Message: $message<br/>\r\n";
if(Send_Mail($to,$email_subject,$email_body))
    return true;
else
    return false;
?>
