<?php
    include "parametre1.php";
    session_start();

    if( !empty($_POST))
    {
        $age = $_POST[ 'age' ];
        if ( $age != "" )
        {
            $_SESSION[ 'age'  ] = $age;
            header( 'location: '.$_url.'/PHP/pagePrenomFrontFinal.php'   );
        }
        else
            header( 'location: '.$_url.'/PHP/pagePrenomFront3.php'   );
    }
?>