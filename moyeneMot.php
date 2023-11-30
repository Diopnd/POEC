<?php
   
    
    $liste = [ 'jean', 'dupont',  'sergent' , 'garcia', 'A',  'xavier', 'dupond', 'unMotQuiEstLong' ];


    function moyenneMot( $liste )
    {
        $totalLongueurMot = 0;
        for ($i=0; $i < count( $liste); $i++) 
        { 
            $mot    = $liste[ $i ];
            $lenMot = strlen( $mot );
            //$totalLongueurMot = $totalLongueurMot + $lenMot;
            $totalLongueurMot +=  $lenMot;
            //print( " $mot -> $lenMot<br>");
        }
        $moyenne = $totalLongueurMot / count( $liste );
        print( " moyenne $moyenne<br>");
    }


    moyenneMot( $liste );

?>
