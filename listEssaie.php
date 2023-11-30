<?php

    $prenoms = [ 'eudes', 'sigismond', 'gontran', 'gertrude' ];


    foreach( $prenoms as $prenom )
    {
        $prenom = ucfirst( $prenom );
        print( "bonjour $prenom<br>" );
        if ( $prenom === 'Gontran' )
            print( "bonne fête $prenom<br>" );
    }

?>