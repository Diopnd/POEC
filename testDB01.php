<?php
    require "parametre.php";
    require "myLib01.php";

    if( !empty($_POST))
    {
        $nom = $_POST[ 'nom' ];

        $nom = htmlspecialchars( $nom );

        $connexion = mysqli_connect( $hostname, $username, $password, $dbname ); 
        // id   | nom      | id_espece | age  | poids  | id_pays | id_regime 

        $sql = "SELECT * FROM animal WHERE nom = '$nom'";
       
       
        print( $sql );
        $result = $connexion->query( $sql );
        $listData = [];
        if ( $result )
        {
            while( $row = mysqli_fetch_array( $result ))
                array_push( $listData, $row );
        }
        $connexion->close();
        myTableList( $listData );
        exit();
    }
?>
<form action="" method="post">
    <input type="text" name="nom" placeholder='nom animal' /> 
    <input type="submit" name="submit" value="OK" />
</form>





