<?php


function triangle(  $hauteur )
{
    for( $h=0 ; $h<$hauteur; $h++ )
    { 
        for( $l=0 ; $l<$h; $l++ ) 
            print( "()");
        print( "<br>");
    }    
}

function calculeNbrBoules(  $hauteur )
{
    $cpt = 0;
    for( $h=0 ; $h<$hauteur; $h++ )
    { 
        for( $l=0 ; $l<$h; $l++ ) 
            $cpt++;
    }
    return $cpt;    
}


triangle( 10 );
triangle( 6 );

$nb = calculeNbrBoules( 1000 );
print( "il y a $nb boules"   );
?>