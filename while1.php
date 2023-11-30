<?php
    // comme pour la boucle for, nouas avons 3 parties :
    
    $a=0;                   // initialisation 
    while( $a < 5 )         // condition de poursuite de la boucle
    {
        print( "$a <br>");
        $a = $a + 1;        // l'incrémentation
    }

    // exemple
    $temperatureConsigne = 19; // initialisation 
    while( getTemperature() < $temperatureConsigne)
        allumeChauffage();
?>



