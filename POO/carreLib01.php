<?php

    include_once "pointLib01.php";

    class Carre extends PointColor
    {
        protected int $cote;       // variable d'instance
    
        public function __construct( $x, $y, $cote, $c='blanc' ) 
        {
            parent::__construct( $x, $y, $c);
            $this->cote = $cote;  // copie des variables 
        }                   // d'instance

        public function __toString()
        {
            $pc = parent::__toString();
            return 'CARRÉ'.$pc.', cote='.$this->cote;
        }        

        public function surface()
        {
            return $this->cote * $this->cote;
        }        
    }

?>
