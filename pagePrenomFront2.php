<?php
    include "myLib01.php";
    include "parametre1.php";

    myHeader( 'info nom' );
    createForm( $_url."/PHP/pagePrenomBack2.php", "nom",  "ton nom" );
    myFooter();
?>