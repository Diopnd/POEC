<?php

    // pour fonctionner ce script nécessite l'installation de la librairie PECL pour php

    class Point
    {
        protected int $x;
        protected int $y;

        public function __construct( int $x, int $y ) 
        {
            $this->x = $x;
            $this->y = $y;
        }

        public function __add( Point  $p ) 
        {
            return new Point( $this->x + $p->x, $this->y + $p->y );
        }

        public function __toString() 
        {
            return '('.$this->x.', '.$this->y.')';
        }
    }

    $p1 = new Point( 4, 5 );
    $p2 = new Point( 1, 2 );
    $p3 = $p1 + $p2;
    print( $p3 );
?>




