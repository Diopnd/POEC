<?php
    require "myLib01.php";
    
    
    $liste = [ 'jean', 'dupont',  'sergent' , 'garcia', 'xavier'  , 'dupond' ];



    print_r( $liste );
    print( '<br>' );


    $listeR = [];

    for( $i = count($liste)-1 ; $i >= 0 ; $i-- )
        array_push( $listeR, $liste[$i] );

    print_r( $listeR );
    print( '<br>' );

    $listeR = [];
    for( $i = count($liste)-1 ; $i >= 0 ; $i-- )
        array_push( $listeR, array_pop( $liste ))


?>