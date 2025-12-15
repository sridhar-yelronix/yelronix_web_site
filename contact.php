<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "yelronix@gmail.com";   // change to your email
    $subject = "Website Contact Form";
    $headers = "From: $email";

    mail($to, $subject, "Name: $name\nEmail: $email\n\n$message", $headers);
    echo "Thank you! Message sent successfully.";
}
?>
