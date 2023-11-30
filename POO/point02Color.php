<?php
    class Point
    {
        protected int $x;
        protected int $y;
    
        public function __construct( int $x, int $y ) 
        {
            $this->x = $x;
            $this->y = $y;
        }

        public function show() 
        {
            print( '('.$this->x.', '.$this->y.')' );
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
    $p1 = new PointColor( 4, 5, 'rouge' );
    $p1->show();
?>




