<?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$email_from = 'info@yididiya-pixle.github.io/code/';

$email_subject = 'New form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".   
                "Subject: $subject.\n".
                 "User message: $message.\n";

$to = 'yiduak@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Replay-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$header);


header("Location: Contact-us.html");

?>