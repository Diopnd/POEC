<?php

    include_once "vehicule.php";

    class Velo extends Vehicule
    {
        protected string $type = '';

        public function __construct( string $nom, $type, $vitesseMax ) 
        {
            parent::__construct( $nom, $vitesseMax );
            $this->type = $type;
        }                   

        public function __toString() 
        {
            return '(Vélo '.$this->nom.'  '.$this->type.')'; 
        }

        public function demarrer()
        {
            print( "$this->nom : j'appuie sur les pédales<br>" );
        }

        public function arreter()        
        {
            print( "$this->nom : je serre les freins<br>" );
            $vitesse10PC = $this->vitesseMax /10;
            if ( $this->vitesse > $vitesse10PC )
                print( "$this->nom : Oups!!! ça secoue...<br>" );
        }
     }
?>