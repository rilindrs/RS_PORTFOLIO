<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'test@gmail.com';
    $email_subject = 'New Form Submission';
    $email_body = "User Name: $name.\n".
                    "User Email: $email.\n".
                        "User Message: $message.\n";
    
    $to = "test2@hotmail.com";
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header('Location:index.html');


?>