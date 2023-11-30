<?php
    require_once "myLib01.php";
    include "parametre.php";

    session_start();

    if ( !empty( $_SESSION[ 'message' ] ))
        $error = $_SESSION[ 'message' ];
    else
        $error = '';

    myHeader( 'info nom' );
    startForm( $__url."/PHP/infoBack1.php" );
    createInput( "prenom",  "ton prenom", $_SESSION[ 'prenom' ] );
    createInput( "nom",  "ton nom", $_SESSION[ 'nom' ] );
    createInput( "age",  "ton age", $_SESSION[ 'age' ] );
    endForm();
    print( $error );
    myFooter();
?>