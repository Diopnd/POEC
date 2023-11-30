<?php
    class Point
    {
        protected int $x;       // variable d'instance
        protected int $y;       // variable d'instance
    
        public function __construct( $x, $y ) 
        {
            $this->x = $x;  // copie des variables 
            $this->y = $y;  // dans les variables
        }                   // d'instance

        public function __toString()
        {
            return '('.$this->x.', '.$this->y.')';
        }        

        public function show()  // la méthode show 
        {
            print( '('.$this->x.', '.$this->y.')' );
        }
    }


    // instanciation d'un Point
    $p1 = new Point(4, 5);
    $p2 = new Point(14, 18);
    $p1->show();
    print( '<br>');
    print( $p1.'<br>'  );

    
    $p2->show();
    print( '<br>');
?>
