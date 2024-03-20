<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];



$from = 'Vignesh.com'
$to = 'mvikey2002@gmail.com';
$body = "First Name: $fname.\n".
        "Last Name: $lname.\n".
        "Mail Name: $mail.\n".
        "Message Name: $message.\n";
$headers = "from :".$from.
            "Reply-To :".$email; 

mail($to,$subject,$body,$headers);
header("Location:contact.html")

?>