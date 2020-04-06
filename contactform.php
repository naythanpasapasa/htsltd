<?php

if(isset($_POST['submit'])) {
    $name = $_POST['text_name'];
    $emailFrom = $_POST['text_email'];
    $message = $_POST['text_message'];

    $mailTo = 'bevcastillo.dev@gmail.com';
    $subject = "HTS Ltd. CONTACT FORM INQUIRY";
    $headers = "From: ".$emailFrom;
    $text = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $text, $headers);
    header("Location: thank-you.html");

    if(mail($mailTo, $subject, $text, $headers)) {
    }else {
    }
} 

?>