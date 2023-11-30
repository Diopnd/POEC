<?php
        
$texte = "Je ne connaîtrai pas la peur car la peur tue l'esprit.
La peur est la petite mort qui conduit à l'oblitération totale.
J'affronterai ma peur. Je lui permettrai de passer sur moi, au travers de moi. 
Et lorsqu'elle sera passée, je tournerai mon œil intérieur sur son chemin. 
Et là où elle sera passée, il n'y aura plus rien. Rien que moi.
Litanie contre la peur.

Chaque route que l'on suit exactement jusqu'au bout ne conduit exactement à rien. 
Escaladez la montagne pour voir si c'est bien une montagne. 
Quand vous serez au sommet de la montagne, vous ne pourrez plus voir la montagne
";


    //$texte = str_replace( $texte );
    //$texte = mb_strtoupper( $texte, 'UTF-8' );
    $texte = strtoupper( $texte );
    $liste = explode( ' ', $texte );
    //$liste = str_split( ' ', $texte );

    $listeMotExamine = [];

    foreach( $liste as $mot )
        if (  array_key_exists( $mot, $listeMotExamine ) == false )
            $listeMotExamine[ $mot ] = 1;
        else
            $listeMotExamine[ $mot ]++;

    foreach ($listeMotExamine as $mot => $quantite) 
        print( $mot.' : '.$quantite.'<br>' );

?>
