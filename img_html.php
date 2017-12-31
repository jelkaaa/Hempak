<?php

function getObicne()
{


    $numb = 1;
    for ($i = 1; $i <= 8; $i++) {
        echo "<div  class=\"col-xs-6 col-md-2\">
                <a class=\"thumbnail\">
                    <img class=\"my_image\" id=\"ob0\" src=\"img/farba/ob" . $numb . ".jpg\" alt=\"Hempak -obicna farba \">
                </a>
            </div>";
        $numb++;
    }


}

function getRuske(){
    $numb = 1;
    for ($i = 1; $i <= 6; $i++) {
        echo " <div  class=\"col-xs-6 col-md-2\">
                <a class=\"thumbnail\">
                    <img class=\"my_image\" id=\"farba1\" src=\"img/farba/" . $numb . ".jpg\" alt=\"Hempak - ruske boje\">
                </a>
            </div>";
        $numb++;
    }
}
function getGel(){
    $numb = 1;
    for ($i = 1; $i <= 6; $i++) {
        echo " <div  class=\"col-xs-6 col-md-2\">
                <a class=\"thumbnail\">
                    <img class=\"my_image\" id=\"farba1\" src=\"img/farba/gel" . $numb . ".jpg\" alt=\"Hempak - gel boje\">
                </a>
            </div>";
        $numb++;
    }
}
function getDekoracija(){
    $numb = 1;
    for ($i = 1; $i <= 12; $i++) {
        echo " <div  class=\"col-xs-6 col-md-2\">
                <a class=\"thumbnail\">
                    <img class=\"my_image\"  src=\"img/dekoracija/dek" . $numb . ".jpg\" alt=\"Hempak - dekoracija\">
                </a>
            </div>";
        $numb++;
    }
}
function getSlicice(){
    $numb = 1;
    for ($i = 1; $i <= 11; $i++) {
        echo " <div class=\"col-xs-6 col-md-3\">
                <a class=\"thumbnail\">
                    <img class=\"my_image\" src=\"img/folija/" . $numb . ".jpg\" alt=\"Hempak- slicice\">
                </a>
            </div>";
        $numb++;
    }
}
?>

