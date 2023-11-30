<?php
    include "pointLib01.php";

    // instanciation d'un Point
    $p1 = new Point(4, 5);
    $p2 = new Point(14, 18);
    $p1->show();
    print( '<br>');
  
    print( $p1.'<br>'  );

    $p2->show();
    print( '<br>');

    $pc1 = new PointColor( 1, 3, 'red' );
    $pc1->show();
    print( $pc1.'<br>'  );
?>