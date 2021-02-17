<?php
    $name = $_POST['imie'];
    $surname = $_POST['nazwisko'];
    $email = $_POST['mail'];
    $msg = $_POST['message'];
    
    $email_from = 'kontakt@gezotest.pl';
    $email_subject = "Kontakt";
    $email_body = 
    "Imię: \n$name.\n\n".
    "Nazwisko: \n$surname.\n\n".
    "E-mail: \n$email.\n\n".
    "Wiadomość: \n$msg.\n\n";





    $to= "kontakt@gezotest.pl";

    $headers = "Submition \r\n";
    $headers = "Reply-to: $email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: success.html");

?>