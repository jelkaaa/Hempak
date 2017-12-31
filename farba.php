<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Farbe za jaja |ruske prehrambene boje za jaja | prehrambene boje za jaja | gel boje za jaja | prodaja boja za farbanje uskrsnjih jaja">
    <meta name="keywords" content="boja,jaja,uskrs,ponuda,farbanje">

    <title>Hempak - Boje za Uskrsnja jaja</title>
    <?php
    require_once ('all.php');
    scripts();
    ?>
</head>

<body id="boja">
<main>

    <div class="container-fluid">
        <?php

        do_html_header();
        ?>



        <br>



        <h1>Boja za uskršnja jaja</h1>
        <p class="info">Na ovoj stranici možete videti našu raznoliku ponudu boja</p>
        <br>
        <div class="katalog">
        <a href="download/katalog.pdf" download="download/katalog.pdf"><img src="img/pdf.ico" width="50px">Katalog proizvoda</a>
        </div>
        <br>
        <div class="row" id="obicne">
            <h2>Prehrambene boje</h2>
            <?php

            getObicne();
            ?>
        </div>

        <hr>
        <div class="row" id="ruske">

            <h2>Ruske prehrambene boje</h2>
            <?php

           getRuske();
            ?>
        </div>

        <hr>
        <div class="row">

            <h2>Gel boje</h2>
            <?php
            getGel();
            ?>


        </div>
        <hr>



        <br>
        <?php

        do_html_footer();
        ?>
    </div>

</main>
</body>
</html>