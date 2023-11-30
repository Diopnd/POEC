<?php
    class Point
    {
        protected int $x;
        protected int $y;

        static int $nbrPoint = 0;
    
        public function __construct( int $x, int $y ) 
        {
            $this->x = $x;
            $this->y = $y;
            Point::$nbrPoint++;
        }

        public function __destruct() 
        {
            Point::$nbrPoint--;
        }

        public function nbrPoint() 
        {
            print( 'nbrPoint : '.Point::$nbrPoint );
        }
    }

    class PointColor extends Point      // dérivation de 
                                        // la class Point 
    {
        protected string $color;
    
        public function __construct( int $x, int $y, string $c ) 
        {   
            parent::__construct( $x, $y );
            // appel du constructeur parent 
            $this->color = $c;
        }

        public function show() 
        {
            parent::show();  // appel de la méthode parent 
            print( '-'.$this->color );
        }
    }

    // instanciation d'un PointColor
    $p1 = new Point( 4, 5 );
    $p2 = new Point( 4, 5 );
    $p3 = new PointColor( 4, 5, 'rouge' );
    $p4 = new PointColor( 4, 5, 'rouge' );
    $p1->nbrPoint();
    unset( $p2 );
    $p1->nbrPoint();
?>




