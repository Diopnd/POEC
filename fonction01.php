<?php


function disBonjour(  $nom, $prenom )
{
    print( disBonjourReturn( $nom, $prenom )    );
}

function disBonjourReturn(  $nom, $prenom )
{
    return "Hi $prenom $nom<br>";
}

function disBonjourReturnH1(  $nom, $prenom )
{
    return "<h1>bonjour $prenom $nom</h1><br>";
}

function disBonjourReturnH1x(  $nom, $prenom )
{
    return "<h1>".disBonjourReturn($nom,$prenom)."</h1>";
}


disBonjour( "dupont", "xavier"  );
disBonjour( "durant", "jean"  );
disBonjour( "landru", "désiré"  );

print( disBonjourReturn( 'garcia', 'sergent' ) );
print( disBonjourReturnH1x( 'garcia', 'sergent' ) );




?>