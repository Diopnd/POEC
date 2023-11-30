<?php

    include_once "vehicule.php";

    class Fuse extends vehicule
    {
        protected string $type = '';

        public function __construct( string $nom, $type, $vitesseMax ) 
        {
            parent::__construct( $nom, $vitesseMax );
            $this->type = $type;
        }                   

        public function __toString() 
        {
            return '(Fuse'.$this->nom.'  '.$this->type.')'; 
        }

        public function demarrer()
        {
            print( "$this->nom :je demarre<br>" );
        }

        public function arreter()        
        {
            print( "$this->nom : J'arrete<br>" );
        }
        public function accelerer(int $dv=10 )        
        {
            $this->vitesse += $dv;

            if ($this->vitesse = $this->vitesseMax )
               print( "$this->nom : tu va trop vide <br>" );
            print( "$this->nom : ma vitesse est de $this->vitesse km/h <br>" );
        }

     }
?>

        
            
            