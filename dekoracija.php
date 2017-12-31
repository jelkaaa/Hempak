<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
          content="Na ovoj stranici možete pogledati našu ponudu mnogobrojnih dekoracija za uskršnja jaja">
    <meta name="keywords" content="dekoracija,novo,uskrs,jaja,ponuda">

    <title>Hempak - Dekoracija za jaja</title>
    <?php
    require_once('all.php');
    scripts();
    ?>
</head>
<body id="dekoracija">
<main>

    <div class="container-fluid">
        <?php

        do_html_header();
        ?>


        <h1>Dekoracija za uskršnja jaja</h1>

        <br>
        <br>
        <p class="info">Na ovoj stranici možete pogledati našu ponudu dekoracija za uskršnja jaja</p>
        <br>
        <?php


        getDekoracija();
        ?>


        <br>
        <?php
        require_once('header.php');
        do_html_footer();
        ?>
    </div>


</main>
</body>
</html>
