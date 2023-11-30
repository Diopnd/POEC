<?php

$a = 5;

function change( &$b )
{
    $b=6;
}

print( $a.'<br>');
change( $a );
print( $a.'<br>');

?>
