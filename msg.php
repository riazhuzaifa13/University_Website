<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$web_email = 'riazhuzaifa@gmail.com';
$recieve_email_subject = 'New form submission';
$recieve_email_body = "User name: $name. \n"." User Email: $email. \n"."User Subject: $subject. \n"."Message: $message";

$to ='riazhuzaifa@gmail.com';

$header = "From : $web_email \r\n";
$header .= "Reply to : $email \r\n";
mail($to,$recieve_email_subject,$recieve_email_body,$header);
header("location:location.html");

?>