<?php
    // la boucle for se décompose en 3 parties séparées 
    // par un point virgue 
    // 1   $a = 0         l'initialisation
    // 2   $a < 5         la condition de bouclage
    // 3   $a++           la fin de boucle où se produit 
    //                    le plus souvent l'incrémentation

    for( $a = 0 ; $a < 5 ; $a++, print( '<br>') )
        print( $a );
    
    // si plusieurs opérations doivent avoir lieu 
    // dans une des sections, elles sont séparées par 
    // une virgule et, exécutées de gauche à droite
?>

