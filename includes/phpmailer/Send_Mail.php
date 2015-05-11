<?php

function Send_Mail($to,$subject,$body)
{
    require 'class.phpmailer.php';
    require 'class.smtp.php';
    $from = "contact@dkmlabs.com";
    $to='contact@dkmlabs.com';
    $email_subject='ses test';
    $email_body="Test test test\r\n";
    $mail = new PHPMailer();
    $mail->IsSMTP(true); // SMTP
    $mail->SMTPAuth   = true;  // SMTP authentication
    $mail->SMTPSecure = "tls";
//    $mail->Mailer = "smtp";
    $mail->Host= "email-smtp.us-east-1.amazonaws.com"; // Amazon SES
    $mail->Port = 587;  // SMTP Port
    $mail->Username = "AKIAILGRUFWBO2C6N3WA";  // SMTP  Username
    $mail->Password = "AkfmYSMGfIjtcVMsddkMYhmdmUfM31mfIOuNDrFgZZ5f";  // SMTP Password
    $mail->SetFrom($from, 'DKM Labs');
    $mail->AddReplyTo($from,'contact@dkmlabs.com');
    $mail->Subject = $email_subject;
    $mail->MsgHTML($email_body);
    $address = $to;
    $mail->AddAddress($address, $to);

    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo . "\r\n"; 
        return false;
    } else {
        return true;
    }
}

?>

