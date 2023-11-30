<?php
    $name = 'toto';
    print( gettype( $name ).' : '.$name.'<br>' );
    // -> string : toto 

    $age = 14;
    print( gettype( $age ).' : '.$age.'<br>' );
    // -> integer : 14 

    $age = '14';  // notez les quotes qui délimitent la chaine 
    print( gettype( $age ).' : '.$age.'<br>' );
    // -> string : 14 
?>



