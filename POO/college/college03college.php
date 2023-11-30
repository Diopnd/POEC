<?php

    include_once "college.php";
    include_once "eleve.php";
    include_once "enseignant.php";
    include_once "surveillant.php";
    include_once "classe.php";



    $college1 = new College( 'Zavatta' );

    $college1->addClasse( new Classe( '5eme D') );
    $college1->addClasse( new Classe( '6eme G') );
    $college1->addClasse( new Classe( '6eme A') );

    $college1->addEleve(  new Eleve( 'prout' ), '5eme D' );
    $college1->addEleve(  new Eleve( 'tata' ) , '6eme A'  );
    $college1->addEleve(  new Eleve( 'toto' ),  '6eme G'  );

    print( '<br>=============================<br>'  );

    $college1->addIndividus(  new Eleve( 'pompon' )  );
    $college1->addIndividus(  new Enseignant( 'maboulette', 12 )  );
    $college1->addIndividus(  new Surveillant( 'Big', 12 )  );

    $college1->affecterA(  'maboulette', '5eme D');
    $college1->affecterA(  'pompon', '5eme D');
   
    print( '<br>=============================<br>'  );
 
    $college1->listerEleves( );

    print( '<br>=============================<br>'  );

    $college1->listerEleves( '5eme D' );

    print( '<br>=============================<br>'  );

    $college1->listerIndividus( );

    print( '<br>=============================<br>'  );

    $individus = $college1->getIndividusByName( 'maboulette' );
    print( $individus );
    print( '<br>=============================<br>'  );
    $individus = $college1->getIndividusByName( 'tata' );
    print( $individus );

    print( '<br>=============================<br>'  );

    $college1->listerClasses( );

    print( '<br>=============================<br>'  );

    $college1->afficherClasses( '5eme D' );

    print( '<br>=============================<br>'  );


?>
