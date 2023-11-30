<?php

    include "testUnit1.php";


    if (  maj( 'toto' ) == 'TOTO' )
        print( 'test OK<br>');
    else
        print( 'test KO<br>');

        if (  maj( '' ) == '' )
        print( 'test OK<br>');
    else
        print( 'test KO<br>');

    if (  maj( '123456789' ) == '123456789' )
        print( 'test OK<br>');
    else
        print( 'test KO<br>');
?>
