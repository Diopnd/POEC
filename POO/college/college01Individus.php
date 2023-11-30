<?php

include_once "enseignant.php";
include_once "surveillant.php";

    $enseignant1 = new Enseignant( 'Tournesol', 11 );

    print( $enseignant1  );
    $enseignant1->travailler();
    $enseignant1->remunerer();


    print( '<br>=============================<br>'  );

    $surveillant1 = new Surveillant( 'Big', 10 );

    print( $surveillant1  );
    $surveillant1->travailler();
    $surveillant1->remunerer();

?>
