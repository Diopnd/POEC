<?php

    // exercice 1 : créer une la nouvelle class nécessaire

<<<<<<< HEAD
    include_once "Fuse.php";
=======
    include_once "fusee.php";
    include_once "velo.php";
>>>>>>> origin/xavier

    $fusee1 = new Fusee( "spaceX", 'cargo', 5000 );
    $velo1 = new Velo( "bicloo", 'vtt', 50 );
    
    $velo1->demarrer();
    $velo1->accelerer();
    $velo1->accelerer(-5);
    $velo1->arreter();
    

    $fusee1->demarrer();
    $fusee1->accelerer();
    $fusee1->accelerer(  500 );
    $fusee1->accelerer(  500 );
    $fusee1->accelerer( -100);
    $fusee1->accelerer( -100);
    $fusee1->accelerer( -100);
    $fusee1->accelerer( -100);
    $fusee1->accelerer( -100);
    $fusee1->arreter();
?>