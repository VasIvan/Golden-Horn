<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'Golden Horn website';
    $email_subject = 'New Message from Golden Horn website';
    $email_body = "Name: $name.\n".
                  "Email: $email.\n".
                  "Message: $message.\n";

    $to = "vasil.ivov.ivanov@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");


?>