<?php


    $prenoms = [ 'eudes', 'sigismond', 'gontran', 'gertrude' ];


    foreach( $prenoms as $prenom )
{
    $prenoms = urfirst($prenom );

        print( "bonjour $prenom<br>" );
}
    if ( $prenoms  == 'gontran')

    print("bonne féte ");
?>