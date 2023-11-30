<?php
    $toto = [   'age'   => 17,           
                'poids' => 76,
                'ville' => 'Rouen',
                'plat'  => 'canard au sang'
               ];
    
    $keys   = array_keys( $toto );
    $values = array_values( $toto );
    $dict2  = array_combine( $keys, $values );
    var_dump( $dict2 );
    
    print( '<br>plat préféré : '.$toto[ 'plat'].'<br>'  );
?>




