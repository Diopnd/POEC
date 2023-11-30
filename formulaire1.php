<?php
    //http://localhost/PHP/formulaire1.php?nom=dupond&prenom=juste&submit=OK

    //var_dump( $_ENV );
    if( !empty($_POST))
    {
        $nom = $_POST[ 'nom' ];
        $prenom = $_POST[ 'prenom' ];
        print( "<h1>hello $prenom $nom</h1>");
        exit(); 
    }
    //$_SERVER['REQUEST_URI']
?>
<form action="" method="post">
    <input type="text" name="nom" placeholder='ton nom' /> 
    <input type="text" name="prenom" placeholder='ton prenom' /> 
    <input type="submit" name="submit" value="OK" />
</form>
<!-- ;dfngd;gnd;,dth, -->
  