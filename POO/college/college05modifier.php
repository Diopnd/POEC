<?php

    include_once "college.php";
    include_once "eleve.php";
    include_once "enseignant.php";
    include_once "surveillant.php";
    include_once "classe.php";



    $college1 = new College( 'Zavatta' );

    $college1->addIndividus(  new Enseignant( 'maboulette', 12 )  );
    $college1->addIndividus(  new Enseignant( 'tournesol', 12 )  );
    $college1->addIndividus(  new Enseignant( 'baracuda', 12 )  );


    $personne = $college1->getIndividusByName( 'baracuda' );

    $personne->setName( 'zorro' );

    $college1->listerIndividus();



    print( '<br>=============================<br>'  );
?>