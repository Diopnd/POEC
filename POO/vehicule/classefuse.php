<?php

    include_once "fusee.php";

    $fusee1 = new Fusee( "spaceX", 'cargo', 5000 );
    
    $fusee1->demarrer();
    $fusee1->accelerer();
    $fusee1->accelerer(  500 );
    $fusee1->accelerer(  500 );
    $fusee1->accelerer( -100);
    $fusee1->accelerer( -100);
    $fusee1->accelerer( -100);
    $fusee1->accelerer( -100);
    $fusee1->accelerer( -100);
    $fusee1->arreter();
            
            
            if ( $ accelerer> 0 )
            print( 'demarrer' );
        elseif ( $accelerer<= 500 )
            print( 'accelerer' );
        elseif ( $accelerer<=-100 )
            print( 'décelérer' );
        elseif ( $accelerer  =0 )
            print( 'arreter' );
        else
            print( 'enfer!!!' );
    
?>