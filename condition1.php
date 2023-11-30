<?php

$temperature = 45;

if ( $temperature < -10  ) 
    print( "très très froid" );
elseif ( $temperature < 15  ) 
    print( "froid" );
elseif ( $temperature < 30  ) 
    print( "bon" );
else 
    print( "trop chaud" );

print( '<br>');

if ( $temperature < -10  ) 
    print( "très très froid" );
if ( $temperature < 15  ) 
    print( "froid" );
if ( $temperature < 30  ) 
    print( "bon" );
if ( $temperature >= 35  ) 
    print( "trop chaud" );

/*
    ==      egal
    !=      diff
    <       inf
    <=      inf ou égal
    >
    >=
    ===     egal en type ET en valeur
*/

?>