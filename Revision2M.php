<?php

// boucle -20 à 40 incr de 5

$prenoms = ['eudes', 'sigismon', 'gontran', 'gertrude'];


foreach($prenoms as $prenom)
{
    if ($prenom == 'gontran')
    {
        print ("Happy Birthday " . "Gontran<br>");
    }else
        print ("salut " . ucfirst($prenom) . "<br>");
}






// for ($temp =-20; $temp <= 40; $temp += 5, print('<br>'))
// {
//     if ($temp == 40)
// {
//     print( "$temp : trop chaud");
// }
// elseif ($temp >= 30)
// {
//     print( "$temp: Fait chaud");
// }
// elseif ($temp >= 15)
// {
//     print( "$temp: Fait bon");
// }
// elseif ($temp >= 5)
// {
//     print( "$temp: Fait froid");
// }
// elseif ( $temp == 0 )
// {
//     print( "$temp: Sortons les gros manteaux");
// }
// elseif ( $temp <= 0 )
// {
//     print( "$temp: Ca gèle" );
// }
// elseif ( $temp <= -10 )
// {
//     print( "$temp: Ca gèle beacoup trop" );
// }
// }

?>