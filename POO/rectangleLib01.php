<?php

    include_once "pointLib01.php";

    class Rectangle extends PointColor
    {
        protected int $largeur;       // variable d'instance
        protected int $longueur;       // variable d'instance
    
        public function __construct( $x, $y, $l, $L, $c='blanc' ) 
        {
            parent::__construct( $x, $y, $c);
            $this->largeur = $l;  // copie des variables 
            $this->longueur = $L;  // copie des variables 
        }                   // d'instance

        public function __toString()
        {
            $pc = parent::__toString();
            return 'RECTANGLE'.$pc.', largeur='.$this->largeur.' ,longueur='.$this->longueur;
        }        

        public function surface()
        {
            return $this->largeur * $this->longueur;
        }        
    }
?>
