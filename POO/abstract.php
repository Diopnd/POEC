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

    abstract class Forme extends Point
    {
        public function __construct( int $x, int $y ) 
        {   
            parent::__construct( $x, $y );
        }

        // Force les classes filles à définir cette méthode
        abstract public function surface();
        abstract public function perimetre();
    }

    class Cercle extends Forme
    {
        protected int $rayon;

        public function __construct( int $x, int $y, int $r ) 
        {   
            parent::__construct( $x, $y );
            $this->rayon = $r;
        }
        public function surface()
        {
            return $this->rayon * $this->rayon * 3.14159;
        }
        public function perimetre()
        {
            return $this->rayon * 2 * 3.14159;
        }
    }

    // instanciation d'un PointColor
    $c1 = new Cercle( 4, 5, 10 );
    print( $c1->surface().'<br>' );
    print( $c1->perimetre().'<br>' );
?>




