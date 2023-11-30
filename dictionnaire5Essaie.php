<?php

    $foret = [  
        'cedre' => [
            'feuille' => 'aiguille',
            'famille' => 'pin',
            'taille' => 'gros'
            ],
        'sequoia' => [
            'feuille' => 'aiguille',
            'famille' => 'pin',
            'taille' => 'haute'
            ]
        ];


    

    foreach ($foret as $nom => $value) 
    {
        print(  $nom.'  ' );
        var_dump(  $value );   
        print( '<br>' );  
    }
?>




