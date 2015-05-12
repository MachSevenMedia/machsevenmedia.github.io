<?php
require '../phpmailer/Send_Mail.php';
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['telephone'])	||
   empty($_POST['type'])	||
   empty($_POST['budget'])	||
   empty($_POST['delivery'])	||
   empty($_POST['outline'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$telephone = $_POST['telephone'];
$type = $_POST['type'];
$budget = $_POST['budget'];
$delivery = $_POST['delivery'];
$outline = $_POST['outline'];
	
// create email body and send it	
$to = 'contact@dkmlabs.com'; // Add the email where you will receive messages sent through the contact form
$email_subject = "Proposal sent by:  $name";
$email_body = "<p>You have received a new project proposal from a client, sent via the proposal form on your wesbite.</p>".
				  "Their Name: $name<br/>\r\n".
				  "Email Address: $email_address<br/>\r\n".
				  "Telephone Number: $telephone<br/>\r\n".
				  "Project Type: $type<br/>\r\n".
				  "Project Budget: $budget<br/>\r\n".
				  "Project Delivery: $delivery<br/>\r\n".
				  "Project Outline: $outline<br/>\r\n";
if(Send_Mail($to,$email_subject,$email_body))
    return true;
else
    return false;
?>
