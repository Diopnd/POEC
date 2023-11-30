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

        public function __toString() 
        {
            return '('.$this->x.', '.$this->y.')';
        }
    }

    $p1 = new Point( 4, 5 );
    print( $p1.'<br>' );
?>




