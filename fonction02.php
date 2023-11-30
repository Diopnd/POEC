<?php
    function addition( $v1, $v2 )
    {
        return $v1+$v2;
    }

    function somme( $liste )
    {
        $total = 0;
        foreach( $liste as $note )
            $total = $total + $note;
        return $total;
    }

    function moyenne1( $liste )
    {
        $total = 0;
        $cpt=0;
        foreach( $liste as $note )
        {
            $total = $total + $note;
            $cpt++;
        }
        return $total/$cpt;
    }

    function moyenne2( $liste )
    {
        return somme($liste) / count($liste);
    }


    function moyenne3( $liste )
    {
        return array_sum($liste) / count($liste);
    }

    print( addition( 3, 5 ));
    print( "<br>");

    $notes = [    6, 4, 7, 4, 8, 9, 4, 0, 5, 5, 4, 5, 7, 5, 3, 2, 2, 1, 5, 5    ];

    print( 'la some des notes :'.somme( $notes )  );
?>