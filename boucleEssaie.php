<?php

    //une boucle de -20 à 40 avec des incréments de 5

    for(    $temprature = -20 ; 
            $temprature <= 40  ; 
            $temprature = $temprature + 5, print( '<br>'))

            if ( $temprature < 0 )
            print( 'gla gla' );
        elseif ( $temprature < 18 )
            print( 'bof bof' );
        elseif ( $temprature < 25 )
            print( 'good !!!' );
        elseif ( $temprature < 35 )
            print( 'pfff !!!' );
        else
            print( 'enfer!!!' );



    for( $temprature = -20 ; $temprature <= 40  ; $temprature = $temprature + 5)
    {
        if ( $temprature < 0 )
            print( 'gla gla' );
 
        if ( $temprature < 18 && $temprature > 15 )
            print( 'bof bof' );
    }
    
    ?>