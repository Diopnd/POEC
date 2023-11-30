<?php
    $promo =
    [
        'toto' => 
            [
                'age'   => 17,
                'poids' => 76,
                'ville' => 'Rouen',
<<<<<<< HEAD
                'permis' => 0,
                'loisir'=> 'danse classique'
=======
                'permis' => false
>>>>>>> origin/xavier
            ],

        'momo' => 
            [
                'age'   => 30,
                'poids' => 88,
                'ville' => 'Rouen',
                'permis' => true,
                'sport' => 'natation'
            ],

        'pipo' => 
            [
                'age'   => 22,
                'poids' => 91,
                'ville' => 'Havre',
<<<<<<< HEAD
                'permis' => true
            ],
        
            'pathe' => 
            [
                'age'   => 31,
                'poids' => 80,
                'ville' => 'Rouen',
                'permis' => 0
=======
                'permis' => true,
                'loisirs' => ['cuisine', 'foot', 'basket' ]
>>>>>>> origin/xavier
            ]
    ];


    $promo[ 'momo' ][ 'cuisine' ] = 'hareng';

    $promo[ 'pipa' ] = [ 'age' => 22,
                         'poids' => 61,
                         'ville' => 'caen'
                        ];


    unset( $promo[ 'momo' ][ 'cuisine' ] );


    foreach ( $promo as $eleve => $data ) 
    {
        print( "elève : $eleve :<br>");
        foreach ( $data as $key => $value) 
        {
            if ( gettype( $value ) == 'array'  )
            {
                print ( "----- $key => ");
                print_r( $value );
                print ( "<br>");
            }
            else
                print ( "----- $key => $value<br>");
        }
        print( "-------------------<br>");
    }

    print( $promo[ 'momo' ][ 'poids'].'<br>'  );

    print( json_encode( $promo)  );

?>