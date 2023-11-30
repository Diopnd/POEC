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
    //$college1->addClasse( new Classe( 'vide') );


    $college1->addIndividus(  new Enseignant( 'maboulette', 12 )  );
    $college1->addIndividus(  new Enseignant( 'tournesol', 12 )  );
    $college1->addIndividus(  new Enseignant( 'baracuda', 12 )  );

    $college1->affecterA(  'maboulette', '5eme D');
    $college1->affecterA(  'tournesol', '6eme G');
    $college1->affecterA(  'baracuda', '6eme A');
    


    $college1->addEleve(  new Eleve( 'prout' ),     '5eme D' );
    $college1->addEleve(  new Eleve( 'dingue' ),    '5eme D' );
    $college1->addEleve(  new Eleve( 'mickey' ),    '5eme D' );
    //$college1->addEleve(  new Enseignant( 'pierre' ),    '5eme D' );
   
    $college1->addEleve(  new Eleve( 'tata' ) ,     '6eme A'  );
    $college1->addEleve(  new Eleve( 'toto' ),      '6eme A'  );
    $college1->addEleve(  new Eleve( 'titi' ),      '6eme A'  );
    $college1->addEleve(  new Eleve( 'tutu' ),      '6eme A'  );
    //$college1->addEleve(  new Enseignant( 'tintin' ),      '6eme A'  );

    $college1->addEleve(  new Eleve( 'minie' ),     '6eme G'  );
    $college1->addEleve(  new Eleve( 'dumbo' ),     '6eme G'  );
    $college1->addEleve(  new Eleve( 'toy' ),       '6eme G'  );
    $college1->addEleve(  new Eleve( 'crochet' ),   '6eme G'  );
    //$college1->addEleve(  new Enseignant( 'haddock' ),   '6eme G'  );

    print( '<br>=============================<br>'  );


    $college1->listerEleves();
    print( '<br>=============================<br>'  );


    $college1->afficherClasse( '5eme D' );
    $college1->afficherClasse( '6eme A' );

    print( '<br>=============================<br>'  );

    $college1->afficherClasses(  );

    print( '<br>=============================<br>'  );


    $college1->listerClasses();
    print( '<br>=============================<br>'  );
?>