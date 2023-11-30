<?php
    include_once "article01.php";
    include_once "facture02.php";
    include_once "client01.php";

    $brou = new Article( 'brouette', 17.99 );
    $arro = new Article( 'arrosoir', 7.5 );
    $bott = new Article( 'botte', 11.15 );
    $pell = new Article( 'pelle', 5 );



    $facture = new FactureCpt(  new Client( 'toto', '32 rue du chien jaune')  );

    $facture->addArticle( $brou, 1 );
    $facture->addArticle( $bott, 1 );
    $facture->addArticle( $bott, 1 );
    $facture->addArticle( $arro, 2 );

    $facture->edit();
    print( '<br>----------------------------<br>');

    //$facture->setQteArticle( 2, 0 );
    $facture->modifyQtyArticleByName( 'arrosoir', 3 );
    $facture->edit();


    print( '<br>----------------------------<br>');

    $cl = new Client( 'tata', '1 rue du square bleu'  );

    $facture2 = new FactureCpt(  $cl  );

    $facture2->addArticle( $pell, 1 );
    $facture2->addArticle( $bott, 1 );
    $facture2->edit();
    print( '<br>----------------------------<br>');

    $facture2->setQteArticle( 2, 5 );
    $facture2->edit();

<<<<<<< HEAD


    




=======
>>>>>>> origin/xavier
?>
