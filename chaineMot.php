<?php
    $mot = 'unMotQuiEstLong';

    $liste = [];
    for ($i=0; $i < strlen( $mot ); $i++) 
    { 
        $lettre    = $mot[ $i ];
        array_push( $liste, $lettre );
        print( "$i $lettre <br>");
    }

    $motr = array_reverse( $liste  );
    foreach( $motr as $lettre )
        print( $lettre );

    print( '<br>'.strrev( $mot ) );
?>
