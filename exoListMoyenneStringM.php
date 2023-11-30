<?php

//compter nb lettres chaque mot et faire la moyenne de toutes les lettres

$myList = ['jean', 'dupont', 'oulalaCestSuperLongCeMot', 'bip', 'jaiPlusDidees'];




function moyenneMot($liste) {
    $totalLongueurMot = 0;
    for ($i =0; $i < count ($liste); $i ++)
    {
        $mot = $liste[$i];
        $lenMot = strlen ($mot);
        $totalLongueurMot += $lenMot;
        print ("$mot -> $lenMot<br>");

    }
    $moyenne = $totalLongueurMot / count( ($liste));
    print("moyenne des lettres : $moyenne");
}



moyenneMot(($myList));


// foreach ($myList as $elementInMyList)
// {
//     $counterLetter = str_split($elementInMyList);
//     print_r($counterLetter);

//     foreach ($counterLetter as $totalLetter)
//     {
//         $finalCount = count($totalLetter);
//         print_r($totalLetter);
//     }
// }


?>