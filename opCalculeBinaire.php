<?php
    $a=12;
    $a=10;      // base décimal

    $a=0x1F;   // base hexadécimal
    $a=0o45;   // base octal

    $a = 0b1100;  // base binaire 
    $b = 0b1010;
    
    print( 'A = '.decbin( $a ).'<br>' );
    print( 'B = '.decbin( $b ).'<br>' );

    $resultat = !$a; // not
    print( '!A = '.decbin( $resultat ).'<br>' );

    $resultat = !0;
    print( '!0 = '.decbin( $resultat ).'<br>' );

    $resultat = $a | $b;
    print( 'A | B = '.decbin( $resultat ).'<br>' );

    $resultat = $a & $b;
    print( 'A & B = '.decbin( $resultat ).'<br>' );

    $resultat = $a ^ $b;
    print( 'A ^ B = '.decbin( $resultat ).'<br>' );

    $resultat = ~1;
    print( '~1 = '.decbin( $resultat ).'<br>' );

    $resultat = $a>>1;
    print( 'A>>1 = '.decbin( $resultat ).'<br>' );

    $resultat = 44>>1;
    print( '44>>1 = '.decbin( $resultat ).'('.$resultat.')<br>' );

    $resultat = $a<<1;
    print( 'A<<1 = '.decbin( $resultat ).'<br>' );

    $resultat = 33<<1;
    print( '33<<1 = '.decbin( $resultat ).'('.$resultat.')<br>' );
?>





