<?php

    include_once "pointLib01.php";

    class Rectangle extends PointColor
    {
        protected int $long;  
        protected int  $larg;   // variable d'instance
    
        public function __construct( $x, $y, $long, $larg , $c='blanc' ) 
        {
            parent::__construct($long, $larg , $c);
            $this->long = $long;  // copie des variables
            $this->larg = $larg ;
        }                   // d'instance

        public function __toString()
        {
            $pc = parent::__toString();
            return 'rectangle'.$pc.', long='.$this->long.', larg='.$this->larg;

        }                             
        public function surface()
        {
            return $this->long * $this->larg;
        }        
    }

?>
