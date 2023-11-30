<?php

    $entreprise =
    [
       'chritine' => 
            [
                'taille'   => 1.6,
                'poids' => 76,
                'ville' => 'Rouen',
                'permis' => 0,
                'loisir'=> 'danse classique'
            ],

            'jean' => 
            [
                'taile'   => 1.7,
                'poids' => 88,
                'ville' => 'paris',
                'permis' => true
            ],

            'pathe' => 
            [
                'age'   => 31,
                'poids' => 80,
                'ville' => 'Rouen',
                'permis' => 0
            ]
    ];
    
    foreach ( $entreprise as $colleque => $data ) 
    {
        print( "colléque : $colleque :<br>");
        foreach ( $data as $key => $value) 
            print ( "----- $key => $value<br>");
        print( "-------------------<br>");
    }
?>