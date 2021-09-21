<?php

function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

$userName = $_POST['name'];
$userEmail = $_POST['email'];
$messageSubject = $_POST['subject'];
$message = $_POST['message'];


$to = "reji.ot@gmail.com";
$subject = "Mail from Fondart website: ".$messageSubject;

$headers = "From: noreply@fondartbakehouse.com" . "\r\n" .
"CC: reji.ot@outlook.com";

$body = "You have recieved an email from: ".$userName."\r\nEmail: ".$userEmail."\r\nMessage: ".$message;

if($email!=NULL){
    mail($to, $subject, $body, $headers);
} 

header ('Location:thankyou.php');

?>