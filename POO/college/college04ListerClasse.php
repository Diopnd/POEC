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
    $college1->addClasse( new Classe( 'vide') );


    $college1->addIndividus(  new Enseignant( 'maboulette', 12 )  );
    $college1->addIndividus(  new Enseignant( 'tournesol', 12 )  );
    $college1->addIndividus(  new Enseignant( 'baracuda', 12 )  );

    $college1->addIndividus(  new Eleve( 'inconnu')  );
    $college1->addIndividus(  NULL  );

    $college1->affecterA(  'maboulette', '5eme D');
    $college1->affecterA(  'tournesol', '6eme G');
    $college1->affecterA(  'baracuda', '6eme A');
    


    $college1->add2Classe(  new Eleve( 'prout' ),     '5eme D' );
    $college1->add2Classe(  new Eleve( 'dingue' ),    '5eme D' );
    $college1->add2Classe(  new Eleve( 'mickey' ),    '5eme D' );
    $college1->add2Classe(  new Enseignant( 'pierreX', 13 ),    '5eme D' );
   
    $college1->add2Classe(  new Eleve( 'tata' ) ,     '6eme A'  );
    $college1->add2Classe(  new Eleve( 'toto' ),      '6eme A'  );
    $college1->add2Classe(  new Eleve( 'titi' ),      '6eme A'  );
    $college1->add2Classe(  new Eleve( 'tutu' ),      '6eme A'  );
    $college1->add2Classe(  new Enseignant( 'tintinX', 13 ),      '6eme A'  );

    $college1->add2Classe(  new Eleve( 'minie' ),     '6eme G'  );
    $college1->add2Classe(  new Eleve( 'dumbo' ),     '6eme G'  );
    $college1->add2Classe(  new Eleve( 'toy' ),       '6eme G'  );
    $college1->add2Classe(  new Eleve( 'crochet' ),   '6eme G'  );
    $college1->add2Classe(  new Enseignant( 'haddockX', 13 ),   '6eme G'  );

    print( '<br>=============================<br>'  );


    $college1->listerEleves();
    print( '<br>=============================<br>'  );


    $college1->afficherClasse( '5eme D' );
    $college1->afficherClasse( '6eme A' );
    $college1->afficherClasse( 'vide' );

    print( '<br>=============================<br>'  );

    $college1->afficherClasses(  );

    print( '<br>=============================<br>'  );

    $college1->listerEleves( );

    print( '<br>=============================<br>'  );
?>