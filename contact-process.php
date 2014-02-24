<?php

// This code establishes the variables of the email form
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

//This code establishes the content of the email in a readable format
$email_body = "";
$email_body = $email_body . "Name: " . $name . "\n";
$email_body = $email_body . "Email: " . $email . "\n";
$email_body = $email_body . "Message: " . $message;

// Still to do is the Send Email protocol

//This forwards the page to the thank you page
header("Location: contact-thanks.php");

?>