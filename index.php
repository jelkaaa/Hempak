
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Hempak | boje za uskrsnja jaja | obuci jaje | farbanje jaja | uskrsnji proizvodi dekoracije slicice">
    <meta name="keywords" content="hempak,uskrs,vaskrs,jaja,boja,obucijaje,slicice,dekoracija">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hempak - Boje za Uskrsnja jaja</title>
    <?php
    require_once ('all.php');
    scripts();
    ?>


</head>

<body id="nav">

<main>




    <div class="container-fluid">
        <?php

        do_html_header();
        ?>


        <h1>Hempak</h1>
        <br>
        <p class="list-group-item">Hempak je samostalna zanatska radnja, osnovana 1995. godine, koja se bavi proizvodnjom uskršnjih proizvoda i dekoracijom.
            Nalazi se u opštini Grocka, mesto Leštane.<a href="onama.php"> >>></a></p>
        <br>

        <div class="slajder">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                    <li data-target="#myCarousel" data-slide-to="6"></li>
                    <li data-target="#myCarousel" data-slide-to="7"></li>
                    <li data-target="#myCarousel" data-slide-to="8"></li>
                    <li data-target="#myCarousel" data-slide-to="9"></li>
                    <li data-target="#myCarousel" data-slide-to="10"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner"  role="listbox">
                    <div class="item active">
                        <img src="img/slajder/sve.jpg" alt="Hempak-svi proizvodi">
                        <h3>Hempak proizvodi</h3>

                    </div>
                    <div class="item">
                        <img src="img/slajder/obicne.jpg" alt="Hempak-obicne boje">
                        <h3>Prehrambene boje za jaja</h3>

                    </div>
                    <div class="item">
                        <img src="img/slajder/ruske.jpg" alt="Hempak-ruske boje">
                        <h3>Ruske prehrambene boje za jaja</h3>

                    </div>
                    <div class="item">
                        <img src="img/slajder/obucijaje.jpg" alt="Hempak-obuci jaje">
                        <h3>Obuci jaje</h3>

                    </div>
                    <div class="item">
                        <img src="img/slajder/krstici.jpg" alt="Hempak-krstici">
                        <h3>Nalepnice za jaja</h3>

                    </div>
                    <div class="item">
                        <img src="img/slajder/zecevi.jpg" alt="Hempak-slicice za jaja">
                        <h3>Dekorativne korpice</h3>

                    </div>

                    <div class="item">
                        <img src="img/slajder/slicice.jpg" alt="Hempak-slicice za jaja">
                        <h3>Reljefne sličice za jaja</h3>

                    </div>
                    <div class="item">
                        <img src="img/slajder/53boja.jpg" alt="Hempak-boje">
                        <h3>5X3 ml Prehrambena boja za jaja</h3>

                    </div>



                    <div class="item">
                        <img src="img/slajder/slajder9.jpg" alt="Hempak-gel boje">
                        <h3>Gel boje za jaja</h3>

                    </div>
                    <div class="item">
                        <img src="img/slajder/trava.jpg" alt="Hempak-dekorativna trava">
                        <h3>Dekorativna trava</h3>

                    </div>
                    <div class="item">
                        <img src="img/slajder/zekakorpice.jpg" alt="Hempak-korpice">
                        <h3>Dekorativne korpice</h3>

                    </div>
                </div>


                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Predhodna</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Sledeća</span>
                </a>
            </div>
        </div>



        <br>
        <br>


        <div class="row">
            <div class="col-sm-8 col-md-4">
                <div class="thumbnail">
                    <h3>Dekoracija</h3>
                    <img  class="my_image" src="img/novosti/deknovosti.jpg" alt="Hempak-dekoracija">
                    <div class="caption">

                        <p>Od ove godine, u našoj kompaniji uskršnja dekoracija</p>
                        <p><a href="dekoracija.php" class="btn btn-info" role="button">Pročitaj Opsirnije</a></p>
                    </div>
                </div>
            </div>


            <div class="col-sm-8 col-md-4">
                <div class="thumbnail">
                    <h3>Obuci jaje</h3>
                    <img  class="my_image" src="img/novosti/obucijajenov.jpg" alt="Hempak-obuci jaje">
                    <div class="caption">

                        <p>Najpopularnije u ponudi, obuci jaje i ove godine</p>
                        <p><a href="slicice.php" class="btn btn-info" role="button">Pročitaj opširnije</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-md-4">
                <div class="thumbnail">
                    <h3>Farba za jaja</h3>
                    <img class="my_image" src="img/novosti/bojenovosti.jpg" alt="Hempak-boje">
                    <div class="caption">

                        <p>Pogledajte ponudu raznovrsnih boja za farbanje jaja</p>
                        <p><a href="farba.php" class="btn btn-info" role="button">Pročitaj opširnije</a></p>
                    </div>
                </div>
            </div>

        </div>

        <?php

        do_html_footer();
        ?>



    </div>




</main>
</body>
</html>
