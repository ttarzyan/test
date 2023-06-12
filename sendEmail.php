<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = $email; 
    $subject = $message;
    $body = "name: $name\nEmail: $email\nmessage:\n$message";

   
    if (mail($to, $subject, $body)) {
        echo "send email";
    } else {
        echo "error email";
    }
}
?>