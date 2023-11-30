<?php
    include "parametre.php";

    session_start();
    $_SESSION[ 'message'] = '';

    if( !empty($_POST))
    {
        $prenom = $_POST[ 'prenom' ];
        $nom    = $_POST[ 'nom' ];
        $age    = $_POST[ 'age' ];

        if ( $prenom == '' )
            $_SESSION[ 'message' ] = 'tu as oublié ton prenom<br>';
        else
            $_SESSION[ 'prenom'  ]  = $prenom;
        
        if ( $nom == '' )
            $_SESSION[ 'message' ] .= 'tu as oublié ton nom<br>';
        else
            $_SESSION[ 'nom'  ]  = $nom;
        
        if ( $age == '' ||  !is_numeric( $age ) )
            $_SESSION[ 'message' ] .= 'tu as oublié ton age<br>';
        else
            $_SESSION[ 'age'  ]  = $age;
        
        if ( $_SESSION[ 'message'] != '' )
            header( 'location: '.$__url.'/PHP/infoFront1.php'   );
        else
            header( 'location: '.$__url.'/PHP/infoFrontFinal.php'   );
    }
?>
