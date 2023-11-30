<?php
    include "pointLib01.php";

    $p1 = new Point( 2, 90 );
    $p2 = new Point( 12, 17 );

    print( "distance : ".Point::distance( $p1, $p2).'<br>' );
?>
