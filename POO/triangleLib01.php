<?php

    include_once "pointLib01.php";

    class Triangle extends PointColor
    {
        private int $largeur;       // variable d'instance
        private int $hauteur;       // variable d'instance
        private int $surface;       // variable d'instance
           
        public function __construct( $x, $y, $l, $h, $c='blanc' ) 
        {
            parent::__construct( $x, $y, $c);
            $this->largeur = $l;  // copie des variables 
            $this->hauteur = $h;  // dans les variables
            $this->calcSurface();
        }                   

        public function __destruct() 
        {
            print( "je suis dans le dstructeur Tr<br>");
            parent::__destruct();
        }                   

        public function __toString()
        {
            $pc = parent::__toString();
            return 'TRIANGLE'.$pc.', largeur='.$this->largeur.', hauteur='.$this->hauteur;
        }        

        public function surface()
        {
            return $this->surface;
        }        

        public function setLargeur( $l )
        {
            $this->largeur = $l; 
            $this->calcSurface();
        }

        public function getLargeur( )
        {
            return $this->largeur; 
        }

        private function calcSurface( )
        {
            $this->surface = $this->largeur*$this->hauteur/2; 
        }
    }
?>
