<?php

if(isset($_POST['email'])) {
    $email = $_POST["email"];
    $message = $_POST["message"];


    $maill = mail("jelka92222@gmail.com", "Poruka sa Hempak sajta", $message, $email);

    if ($maill) {
        echo 'Uspešno ste nas kontaktirali, hvala na ukazanom poverenju';
    }
}


?>