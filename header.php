<?php
function scripts(){
    echo"
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
         <script  src=\"js/AjaxForma.js\"></script>
    <script  src=\"js/jQuery.js\"></script>
    <script  src=\"js/nav.js\"></script>
    <div id=\"fb-root\"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>


    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/novistil.css\" rel=\"stylesheet\">
    <link href=\"css/slikestil.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/font-awesome.min.css\">

    <link href=\"css/animate.css\" rel=\"stylesheet\">
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"js/bootstrap.min.js\">

    </script>";
}

function do_html_header(){

    echo '<div class="logogore" >


            <a href="index.php"><img src="img/novilogo2.png"  alt="Hempak -logo" ></a>

        </div>
            <nav class="navbar navbar-default">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav nav-tabs nav-justified">
                        <li><a href="index.php">Početna</a></li>
                        <li><a href="onama.php">O nama</a></li>
                        <li class="dropdown">
                            <a href="proizvodi.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proizvodni program <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="farba.php">Boja i stikeri za jaja</a></li>
                                <li><a href="dekoracija.php">Dekoracija za jaja</a></li>
                                <li><a href="slicice.php">Sličice za jaja</a></li>

                            </ul>
                        <li><a href="faq.php">Pitanja</a></li>
                        <li><a href="kontakt.php">Kontakt</a></li>
                    </ul>
                </div>
            </nav>';
}
function do_html_footer(){
    echo '<br>

        <div class="logodole">
            <a href="index.php"><img src="img/novilogo2.png"  align="center"  alt="Hempak -logo"></a>
        </div>

        <nav class="navbar navbar-default">

            <div class="navbar-collapse">
                <div class="panel-body">
                    <ul class="nav nav-tabs nav-justified">
                        <li>
                            <a href="index.php">Početna</a></li>
                        <li><a href="onama.php">O nama</a></li>
                        <li class="dropup">
                            <a href="proizvodi.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proizvodni program <span class="caret"></span></a>

                            <ul class="dropdown-menu">
                                <li><a href="farba.php">Boja i stikeri za jaja</a></li>
                                <li><a href="dekoracija.php">Dekoracija za jaja</a></li>
                                <li><a href="slicice.php">Sličice za jaja</a></li>

                     </ul>
                        </li>
                        <li><a href="faq.php">Pitanja</a></li>
                        <li><a href="kontakt.php">Kontakt</a></li>
                    </ul>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="img/2.gif" height="150px" width="auto">
                        </div>
                        <div class="col-lg-4">
                            <br>

                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                Kosmajska 6, Leštane 11309 </p>
                            <p><i class="fa fa-phone-square" aria-hidden="true"></i>
                                064/180-1623 &nbsp  &nbsp  &nbsp  &nbsp</p>
                            <p><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <a href="mailto:hempaklestane@gmail.com">hempaklestane@gmail.com</a></p>
                        </div>
                        <div class="col-lg-4">
                            <img src="img/1.gif" height="150px" width="auto">
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-4">
                       <img id="dis" src="img/aman.png" onclick="window.open(\'http://www.aman.co.rs\')">
                    </div>
                    <div class="col-lg-4">
                        
                        <p> Copyright © 2017 | Hempak </p>
                        <div class="fb-like" data-href="http://www.hempak.rs/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                    </div>
                    <div class="col-lg-4">
                        <img id="dis" src="img/diss.png" onclick="window.open(\'http://www.dismarket.rs/pocetna.php\')">
                    </div>

                </div>
                <br>
            </div>
        </nav>';
}