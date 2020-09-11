<?php
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];


	$email_from = 'siddharth482@gmail.com';

	$email_subject = "Subject: $subject \n"

	$email_body = "Name: $name \n"
			"User Email: $visitor_email \n"
			"User Message: $message \n";

	$to = "agrawalanirudh1375@gmail.com";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: index.html");

?>
