<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['comments'];
$formcontent=" From: $name \n Message: $message";
$recipient = "elcgrossman@yahoo.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
// echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#666;font-family:helvetica neue'> Return Home</a>";
if(isset($_SERVER['HTTP_REFERER'])){
    header("Location: " . $_SERVER['HTTP_REFERER']);    
} else {
    echo "An Error";
}
?>
