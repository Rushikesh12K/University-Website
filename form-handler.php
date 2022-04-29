<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'jadhavrohitsg@gmail.com';  //This mail should be like your domain name

$email_subject = 'New Enquiry';

$email_body = "User Name: $name.\n ".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "Message: $message.\n".;

$to = 'strategic99instincts@gmail.com'; //As if where (on which email id) you want to receive mails.

$headers = "From: $email_from \r\n";
      
$headers .= "Reply to: $visitor_email \r\n ";

mail($to, $email_subject, $email_body, $headers );

header("Location: contact.html") //This is where you want to redirect the user after submitting the form

?>