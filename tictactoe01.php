<style>
        td { 
            width: 40px; 
        }
</style>


<?php
    require "myLib01.php";
    
    myHeader( 'toto' );

    print( '<h1>HELLO</h1>'  );
    
    $data = 
    [
        [ '()'    , 'X'    , '()' ],
        [ '()'    , '()'   , '()' , '()' , '()' ],
        [ '()'    , 'X'    , '()' ],
    ];

    myTableList( $data );


    print( '<br>' );
    print( '<br>' );
    print( '<br>' );

    $data = 
    [
        [ '()'    , 'X'    , '()' ],
        [ '()'    , 'X'   , '()' ],
        [ '()'    , 'X'    , '()' ],
    ];
    myTableList( $data );

    myFooter();
?>