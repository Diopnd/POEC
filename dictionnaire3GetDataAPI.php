<?php

$url = "https://rouenmetropole.opendatasoft.com/api/explore/v2.1/catalog/datasets/eco-counter-sites/records?limit=20";

$json = file_get_contents( $url );
//print( $json );

$dictionnaire = json_decode( $json, true );

$listeResult =   $dictionnaire[ 'results' ];

foreach( $listeResult as $borne )
    print( $borne[ 'name' ].'('.$borne[ 'commune' ].')<br>'   ); 
?>




