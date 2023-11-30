<?php

include "triangleLib01.php";
include "carreLib01.php";
include "rectangleLib01.php";

    $t1 = new Triangle( 5, 9, 12, 6 );
    $t2 = new Triangle( -5, 19, 1, 7 );

    $k1 = new Carre( 15, -1, 17 );

    $r1 = new Rectangle( 105, 106, 17, 33 );

    $p1 = new Point( 2, 90 );
    $p2 = new Point( 12, _17 );
    $p3 = new Point( 2, 90 );
    $p4 = new Point( 2, 90 );
    $p5 = new Point( 2, 90 );
    $p6 = new Point( 2, 90 );

    print( $t1 );
    print( "<br>" );
    print( $t2 );
    print( "<br>" );
    print( $p1);
    print( "<br>" );
    print( $k1);
    print( "<br>" );
    print( $r1);
    print( "<br>" );

    print( $t1->surface() );
    print( "<br>" );
    print( $k1->surface() );
    print( "<br>" );

    print( $r1->surface() );
    print( "<br>" );



    $formes = [ $t1, $t2, $k1, $r1 ];


    $surfaceTotale = 0;
    foreach ($formes as $forme ) 
    {
        $surfaceTotale += $forme->surface();
        print( $forme.'<br>' );
    }
    print( "surface totale : ".$surfaceTotale.'<br>' );

   

    print( "nbr Points : ".Point::$nbrPoint.'<br>' );
    //unset( $p1 );
    $t1 = NULL ;
    print( "nbr Points : ".Point::$nbrPoint.'<br>' );


    print( "distance : ".Point::distance( $p1, $p2).'<br>' );


    print( "---------------------<br>" );




?>
