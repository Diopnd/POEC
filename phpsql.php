<?php
	
    require "parametre1.php";
	
	$connexion = mysqli_connect( $hostname, $username, $password, $dbname ); 


    // id   | nom      | id_espece | age  | poids  | id_pays | id_regime 

    $sql = "SELECT * FROM animal";

    $result = $connexion->query( $sql );

	if ( $result )
    {
		while( $row = mysqli_fetch_array( $result ))
        {
            print_r( $row );
            print( '<br>');
        }

	}
    $connexion->close();
?>
