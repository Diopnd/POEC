<?php
    include "parametre.php";
    session_start();

include "parametre1.php";
session_start();

if( !empty($_POST))
{
    $nom = $_POST[ 'nom' ];
    if ( $nom != "" )
    {
        $_SESSION[ 'nom'  ] = $nom;
        header( 'location: '.$_url.'/PHP/pagePrenomFront3.php'   );
    }
    else
        header( 'location: '.$_url.'/PHP/pagePrenomFront2.php'   );
}

?>