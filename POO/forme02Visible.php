<?php

include "triangleLib01.php";
include "carreLib01.php";
include "rectangleLib01.php";

    $t1 = new Triangle( 5, 9, 12, 6 );
    



    print( $t1->surface().'<br>' );
    //$t1->largeur = 10;
    $t1->setLargeur(  10  );
    print( $t1->surface().'<br>' );




?>
