<?php
    $name = $_POST['imie'];
    $surname = $_POST['nazwisko'];
    $tel = $_POST['tel'];
    $email = $_POST['mail'];
    $company = $_POST['firma'];
    $url1 = $_POST['adresUrl'];
    $url2 = $_POST['adresUrl2'];
    $materialy = $_POST['materialy'];
    $social = $_POST['socialmedia'];
    $size = $_POST['biznes'];
    $podstrony = $_POST['podstrony'];
    $logo = $_POST['logo'];
    $add = $_POST['reklama'];
    $about = $_POST['oFirmie'];
    $uwagi = $_POST['uwagi'];
    
    
    $email_from = 'kontakt@gezotest.pl';
    $email_subject = "Wycena";
    $email_body = 
    "Imię: \n$name.\n\n".
    "Nazwisko: \n$surname.\n\n".
    "Telefon: \n$tel.\n\n".
    "E-mail: \n$email.\n\n".
    "Nazwa Firmy: \n$company.\n\n".
    "Aktualna Strona: \n$url1.\n\n".
    "Strona przykład: \n$url2.\n\n".
    "Posiada materiały na stronę: \n$materialy.\n\n".
    "Czy mamy zająć się socialmedia?: \n$social.\n\n".
    "Rozmiar biznesu: \n$size.\n\n".
    "Ilość podstron: \n$podstrony.\n\n".
    "Czy chce nowe logo?: \n$logo.\n\n".
    "Czy chce pomocy z reklamą?: \n$tel.\n\n".
    "O firmie: \n$about.\n\n".
    "dodatkowe: \n$uwagi.\n\n";





    $to= "kontakt@gezotest.pl";

    $headers = "From: $email_from \r\n";
    $headers = "Reply-to: $email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: success.html");

?>