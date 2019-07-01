<?php 
$phone = $_POST['phone'];
$name = $_POST['name'];
$email = $_POST['email'];
$call = $_POST['call'];
$website = $_POST['website'];
$priority = $_POST['priority'];
$type = $POST['type'];
$message = $_POST['message'];
$formcontent="From: $name \n  Message: $message, $phone";
$recipient = "danivarg@iu.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
