<?php


function addition( $v1, $v2 )
{
    return $v1+$v2;
}

function moyenne( $liste )
{
    $total = 0;
    foreach( $liste as $note )
        $total = ($total + $note)/count($liste);
    return $total;
}

print( addition( 3, 5 ));
print( "<br>");


$notes = [    6, 4, 7, 4, 8, 9, 4, 0, 5, 5, 4, 5, 7, 5, 3, 2, 2, 1, 5, 5    ];

print( 'la moyenne :'.moyenne( $notes )  );


?>
