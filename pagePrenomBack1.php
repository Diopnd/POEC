<?php
    include "parametre1.php";

    session_start();

    if( !empty($_POST))
    {
        $prenom = $_POST[ 'prenom' ];
        if ( $prenom != "" )
        {
            $_SESSION[ 'prenom'  ] = $prenom;
            header( 'location: '.$_url.'/PHP/pagePrenomFront2.php'   );
        }
        else
            header( 'location: '.$_url.'/PHP/pagePrenomFront1.php'   );
    }
?>
