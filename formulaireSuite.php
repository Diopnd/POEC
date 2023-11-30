<?php

    session_start();

    print( session_save_path() );
    $nom        = $_SESSION[ 'nom' ];
    $prenom     = $_SESSION[ 'prenom' ];

    print( "<h1>hello $prenom $nom</h1>");
?>
