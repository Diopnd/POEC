<?php
    require "myLib01.php";
    
    myHeader( 'toto' );

    print( '<h1>HELLO</h1>'  );
    
    $data = 
    [
        [ 'jean'    , 'dupont' ],
        [ 'sergent' , 'garcia' ],
        [ 'xavier'  , 'dupont' ],
        [ 'désiré'  , 'landru' ]
    ];


    myTable( 4, 4, ":)" );
    myTable( 10, 5);
    myTable( 10, 5, "0+0" );

    myTableList( $data );

    myFooter();
?>