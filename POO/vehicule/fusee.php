<?php

    include_once "vehicule.php";

    class Fusee extends Vehicule
    {
        protected string $type = '';

        public function __construct( string $nom, $type, $vitesseMax ) 
        {
            parent::__construct( $nom, $vitesseMax );
            $this->type = $type;
        }                   

        public function __toString() 
        {
            return '(Fusée '.$this->nom.'  '.$this->type.')'; 
        }

        public function demarrer()
        {
            print( "$this->nom : j'allume la mêche, la fusée décolle'<br>" );
        }

        public function arreter()        
        {
            print( "$this->nom : j'éteinds le moteur, je tombe<br>" );
            $vitesse10PC = $this->vitesseMax /10;
            if ( $this->vitesse > $vitesse10PC )
            {
                print( "$this->nom : ta vitesse est de $this->vitesse<br>" );
                print( "$this->nom : Oups!!! ça secoue...<br>" );
            }

        }
     }
?>