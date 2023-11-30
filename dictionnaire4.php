<?php
    $toto = [   'age'   => 17,
                'poids' => 76,
                'ville' => 'Rouen'   ];
    
    $toto[ 'loisir'] = 'vélo';
    $toto[ 'age'] = 27;
    
    print_r( $toto );
    $json = json_encode( $toto );
    print( '<br>'.$json.'<br>' );
    $toto2 = json_decode( $json );
    print_r( $toto2 );

    // https://rouenmetropole.opendatasoft.com/explore/?stage_theme=true&sort=explore.popularity_score
?>




