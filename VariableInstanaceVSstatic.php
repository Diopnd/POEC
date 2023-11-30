<?php

    class Point
    {
        public int $x;
        public int $y;
        public int $id;

        // variable de class
        static public int $cpt = 0;

        public function __construct(  $x, $y )
        {
            $this->x = $x;
            $this->y = $y;                
            Point::$cpt += 1;
            $this->id = Point::$cpt;
        }

        public function __toString()
        {
            return "#$this->id : ( $this->x, $this->y )<br>";
        }
    }


    $p1 = new Point( 11, 12 );
    print( $p1 );

    $p2 = new Point( -11, -12 );
    print( $p2 );

    $p3 = new Point( -1, -3 );
    print( $p3 );


    $listPoints = [ $p1, $p3, $p ];
    for( $a=10 ; $a < count($listPoints)+10 ; $a++ )
        print( "$a  -> ".$listPoints[$a-10] ); 

    foreach ($listPoints as $point ) {
        print( $point );
    }
    

?>
