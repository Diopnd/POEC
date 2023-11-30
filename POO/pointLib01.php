<?php
    class Point
    {
        static int $nbrPoint = 0;

        protected int $x;       // variable d'instance
        protected int $y;       // variable d'instance
    
        public function __construct( $x, $y ) 
        {
            $this->x = $x;  // copie des variables 
            $this->y = $y;  // dans les variables
            Point::$nbrPoint++;

        }                   

        public function __destruct( ) 
        {
            print( "je suis dans le dstructeur P<br>");
            Point::$nbrPoint--;
        }                   

        public function __toString()
        {
            return '('.$this->x.', '.$this->y.')';
        }        

        public function show()  // la méthode show 
        {
            print( '('.$this->x.', '.$this->y.')' );
        }

        public static function distance( $p1, $p2)
        {
            $dx = $p1->x - $p2->x;
            $dy = $p1->y - $p2->y;
            return sqrt(($dx*$dx) + ($dy*$dy));
        }
    }

    class PointColor extends Point
    {
        public string $color;

        public function __construct( int $x, int $y, string $c  )
        {
            parent::__construct( $x, $y );
            $this->color = $c;
        }

        public function __destruct( ) 
        {
            print( "je suis dans le dstructeur PC<br>");
            parent::__destruct();
        }                   


        public function __toString()
        {
            $p = parent::__toString() ;
            return '['.$p.', '.$this->color.']' ;
        }        

        public function show()
        {
            parent::show();
            print( $this->color.'<br>');
        }        

    }
?>
