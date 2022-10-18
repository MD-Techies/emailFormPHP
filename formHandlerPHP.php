<?php
$myEmail = "myemail@gmail.com";
$otherEmail = htmlspecialchars($_POST['email']);
$name = htmlspecialchars($_POST['name']);
$body = htmlspecialchars($_POST['message']);

$to = $myEmail;
$subject = "$name is trying to get ahold of you from $otherEmail";
$message = "$name response is: $body";
$headers = "From: $myEmail\n";

mail($to, $subject, $message, $headers);



?>