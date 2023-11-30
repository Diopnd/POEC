<?php

    session_start();

    $nom        = $_SESSION[ 'nom' ];
    $prenom     = $_SESSION[ 'prenom' ];
    $age        = $_SESSION[ 'age' ];

<<<<<<< HEAD
    print( "<h1>hello $prenom $nom, tu as $age ans</h1>");
=======
    print( "<h1>hello $prenom $nom, tu as $age ans.</h1>");
>>>>>>> origin/xavier
    
?>
