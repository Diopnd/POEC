<?php

$a=0; 
while( 1 )
{
    print( "$a <br>");
    if ( $a == 10 )
        break;
    print( "après break<br>");
    $a = $a + 1;
}

$a=0; 
while( 1 )
{
    print( "$a <br>");
    $a = $a + 1;
    if ( $a < 5 )
        continue;
    print( "après continue<br>");
    if ( $a == 10 )
        break;
}


?>