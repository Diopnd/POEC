<?php

    $age = 18;

    if ( $age < 3 )
        print( 'nounou' );
    elseif ( $age < 6 )
        print( 'mater' );
    elseif ( $age < 11 )
        print( 'prim' );
    elseif ( $age < 15 )
        print( 'college' );
    elseif ( $age < 18 )
        print( 'lycée' );
    elseif ( $age < 30 )
        print( 'fac' );
    elseif ( $age < 99 )
        print( 'galere' );
    else
        print( 'retraite' );
        print( '<br>*******************************<br>');

    if ( $age == 18 )
        print( '<br>permis' );

    print( '<br>*******************************<br>');

    if ( $age > 0 and $age < 3 )
        print( 'nounou' );

    if ( $age >= 3 and $age < 5 )
        print( 'mater' );
    
    if ( $age >= 99  )
        print( 'retraite' );
    
        if ( $age >= 10 and $age < 19 )
        print( 'betises' );
        
    if ( $age >= 15 and $age < 19 )
        print( 'lycée' );
 
    //  3 mat
    //  6 prim
    // 18 permis
    // 99 retraite
    // 15 lycéé
    // 11 college

?>