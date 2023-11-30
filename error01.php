<?php
    function div( $a, $b)
    {
        if ( $b == 0 )
            throw new Exception('Division par zéro.');
        return $a/$b;
    }

    try
    {
        print( div( 10, 2)  ); 
        print( div( 10, 0)  ); 
        print( div( 100, 3)  ); 
    }
    catch (Exception $e ) 
    {
        print('Exception reçue : '.$e->getMessage() );
    }
    finally 
    {
        print( "Seconde fin." );
        print( 'toto' );
    }
    
?>