<?php
    require "myLib01.php";
    
    
    $liste = [ 'jean', 'dupont',  'sergent' , 'garcia', 'xavier'  , 'dupond' ];

    print_r( $liste );
    print( '<br>' );

    array_push( $liste, 'zorro' );
    print_r( $liste );
    print( '<br>' );

    $elem = array_pop( $liste );
    print( $elem );
    print( '<br>' );
    print_r( $liste );
    print( '<br>' );


    array_unshift($liste, "raspberry" );
    print_r( $liste );
    print( '<br>' );

    $elem = array_shift($liste );
    print( $elem );
    print( '<br>' );
    print_r( $liste );
    print( '<br>' );

    unset( $liste[3] );
    print_r( $liste );
    print( '<br>' );
    foreach( $liste as $elem )
        print( $elem.' ' );

    
    print( '<br>' );

    array_push( $liste, 'zorro' );
    foreach( $liste as $elem )
        print( $elem.' ' );
    
    print( '<br>' );
    print_r( $liste );
    print( '<br>' );

    print_r( $liste );
    $liste[3] = 'tata';
    print_r( $liste );

    array_push( $liste, 'zara' );
    print( '<br>' );
    print_r( $liste );

    $insert = [ 'un', 'deux' ];

    array_splice( $liste, 2, 0, $insert );
    print( '<br>' );
    print_r( $liste );







    $data = 
    [
        [ 'jean'    , 'dupont' ],
        [ 'sergent' , 'garcia' ],
        [ 'xavier'  , 'dupond' ],
        [ 'désiré'  , 'landru' ]
    ];



?>