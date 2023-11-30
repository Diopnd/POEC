<?php

print( "la tete à toto<br>" );
print( "&lth1&gt  la &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp tete                   à               toto<br>" );
print( "<h1>  la &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp tete                   à               toto<br>" );

for( $a=0 ; $a < 1000 ; $a += 50 )
        print( sprintf( "%4d X %4d = %d <br>", $a, $a, $a*$a    ) );
?>
