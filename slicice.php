<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Reljefne slicice | obuci jaje | krstici za jaja | prodaja slicica za uskrsnja jaja">
    <meta name="keywords" content="slicice,jaja,uskrs,obucijaje,novo,folija">

    <title>Hempak - Slicice za uskrsnja jaja</title>
    <?php
    require_once ('all.php');
    scripts();
    ?>
</head>
<body id="slicice">
<main>

    <div class="container-fluid">
        <?php

        do_html_header();
        ?>





        <h1>Sličice za uskršnja jaja</h1>

        <br>
        <br>
        <p class="info">Na ovoj stranici možete pogledati našu ponudu sličica za uskršnja jaja</p>
        <br>



        <div class="row">
            <?php

            getSlicice();
            ?>
        </div>


        <br>
        <?php
       
        do_html_footer();
        ?>
    </div>

</main>
</body>
</html>