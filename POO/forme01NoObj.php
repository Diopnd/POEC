<?php
    $listForme =
    [
        [  'type' => 'T', 'x' => 5, 'y' => 9, 'lar' => 12, 'haut' => 6  ],
        [  'type' => 'T', 'x' => -5, 'y' => 19, 'lar' => 1, 'haut' => 7  ],
        [  'type' => 'K', 'x' => 15, 'y' => -1, 'cot' => 17  ],
        [  'type' => 'R', 'x' => 105, 'y' => 106, 'lar' => 17, 'haut'=> 33   ]
    ];



    $surfaceTotale = 0;
    foreach ($formes as $forme ) 
    {
        if ( $forme[ 'type' ] == 'T')
            $surface = $forme['lar']*$forme['haut']/2;
        elseif ( $forme[ 'type' ] == 'K')
            $surface = $forme['cot']*$forme['cot'];
        elseif ( $forme[ 'type' ] == 'R')
            $surface = $forme['lar']*$forme['haut'];

        $surfaceTotale += $surface;
    }

    print( "surface totale : ".$surfaceTotale.'<br>' );




?>
