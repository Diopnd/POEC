<?php
    include_once "bateau.php";

    $bateau1 = new Bateau( "licorne", 'cargo', 40 );
    
    $bateau1->demarrer();
    $bateau1->accelerer();
    $bateau1->accelerer( 15 );
    $bateau1->accelerer( -10);
    $bateau1->accelerer( -10);
    $bateau1->arreter();  
?>