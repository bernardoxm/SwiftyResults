<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$formcontent=" From: $name \n Email: $email \n Message: $message";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

try {
    mail("icpedrosa@swiftyresults.com ; bernardo.melo@swiftyresults.com", $subject, $formcontent, $mailheader);
    header('HTTP/1.1 200 OK');
} catch (Exception $ex) {
	// jump to this part
	// if an exception occurred
    echo "$ex";
    
}

?>