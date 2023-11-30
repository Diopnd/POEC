<?php

    // josé
    include "testUnit1.php";


    $ville = "rouen";

    $ville = maj( $ville );


    if ( $ville == 'ROUEN' )
        print( "reduction 5% ville $ville ");
    else
        print( "pas dereduction, ville $ville ");


?>
