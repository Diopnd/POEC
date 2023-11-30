<?php
    abstract class Vehicule
    {
        protected string    $nom        = '';
        protected int       $vitesseMax = 0;
        protected int       $vitesse    = 0;

        public function __construct( string $nom, int $vitesseMax ) 
        {
            $this->nom = $nom;
            $this->vitesseMax = $vitesseMax;
        }                   

        public function __toString() 
        {
            return $this->nom.'('.$this->vitesse.'km/h)'; 
        }

        public function setVitesse( int $vitesse ) 
        {
            $this->vitesse = $vitesse;
        }

        public function getVitesse( int $vitesse ) 
        {
            return $this->vitesse;
        }

        public function accelerer( int $dv=10 )
        {
            $this->vitesse += $dv;Oups!!! ça secoue..

            if( $this->vitesse > $this->vitesseMax )
            {
                $this->vitesse = $this->vitesseMax;
                print( "$this->nom tu vas trop vite<br>");
            }
            print( "$this->nom : ma vitesse est de $this->vitesse km/h <br>" );
        }

        abstract public function demarrer();
        abstract public function arreter();        
     }
?>