<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
          content="U svakom trenutku možete da nas kontaktirate putem forme, dok na mapi možete videti gde se tačno nalazimo.">
    <meta name="keywords" content="kontakt,Kosmajska6,Lestane,telefon,lokacija,informacije">

    <title>Hempak - Kontakt</title>
    <?php
    require_once('all.php');
    scripts();
    ?>
</head>
<body id="kontakt">
<div class="container-fluid">
    <?php

    do_html_header();
    ?>

    <h2>Kontakt</h2>
    <br>


    <p class="info">U svakom trenutku možete da nas kontaktirate i dobijete željene informacije, dok na mapi možete
        videti gde se tačno nalazimo. </p>
    <br>

 <div class="row">

        <div class="col-md-6">
            <h2 class="page-header">Informacije</h2>
            <p class="info"><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                Kosmajska 6, Leštane 11309 </p>
            <p class="info"><i class="fa fa-phone-square fa-2x" aria-hidden="true"></i>
                064/180-1623 &nbsp &nbsp &nbsp &nbsp</p>
            <p class="info"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>
                <a href="mailto:hempaklestane@gmail.com">hempaklestane@gmail.com</a></p>
            <p class="info">Pib broj : 106992651</p>

        </div>
        <div class="col-md-6">
            <h2 class="page-header">Kontakt Forma</h2>
            <span id="error_message" class="alert-danger"></span>
            <span id="success_message" class="alert-success"></span>
            <form id="submit_form">

                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail adresa">
                </div>
                <div class="form-group">

       <textarea class="form-control" name="message" id="message" rows="7" cols="30">

</textarea>
                </div>

                <button type="button" id="submit" class="btn btn-info">Pošalji</button>

            </form>
        </div>
    </div>

 <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">Kako do nas?</h2>
           
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d181417.66005006508!2d20.5688881495322!3d44.72673506354256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a765002b97ecf%3A0x777bae11e3f32a15!2sLe%C5%A1tane%2C+Serbia!5e0!3m2!1sen!2srs!4v1489243938558"
                        width="100%" height="460" frameborder="0" style="border: 1px solid #2fab00;"
                        allowfullscreen></iframe>
           
        </div>
    </div>


    <br>
    <br>
    <br>

    <br>
    <?php
    do_html_footer();
    ?>
</div>


</body>
</html>