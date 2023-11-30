<?php

    session_start();

    $nom        = $_SESSION[ 'nom' ];
    $prenom     = $_SESSION[ 'prenom' ];
    $age        = $_SESSION[ 'age' ];

    print( "<h1>hello $prenom $nom, tu as $age ans.</h1>");
    
?>
