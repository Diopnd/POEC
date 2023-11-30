<style>
        td { 
            border: 1px solid black;
        }
</style>


<?php
    require "myLib01.php";
    
    
    $data = 
    [
        [ 'jean'    , 'dupont' ],
        [ 'sergent' , 'garcia' ],
        [ 'xavier'  , 'dupond' ],
        [ 'désiré'  , 'landru' ]
    ];


    foreach( $data as $ligne)
    {
        foreach( $ligne as $cellule )
            print( $cellule.'     ' );
        print( '<br>' );

    }    

    print( '<br>' );

    print( '<table>' );
    for( $i = 0 ; $i < count( $data ) ; $i++ )
    {
        print( '<tr>' );
        for( $j = 0 ; $j < count( $data[$i] ) ; $j++ )
            print( '<td>'.$data[ $i ][ $j ].'</td>' );
        print( '</tr>' );
    }
    print( '</table>' );



    print_r( $data[ 0 ] );
    print( '<br>' );
    print( $data[ 0 ] [ 0] );

    print( '<br>' );
    print( $data[ 2 ] [1] );

    print( '<br>' );
    print( '<br>' );




?>