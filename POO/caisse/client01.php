<?php
    include_once "article01.php";

    class Client
    {
        protected string $nom;       // variable d'instance
        protected string $adresse;       // variable d'instance
        
        public function __construct( string $n, string $a ) 
        {
            $this->nom  = $n; 
            $this->adresse  = $a; 
        }                   

        public function __toString() 
        {

            return $this->nom.'<br>'.$this->adresse; 
        }                   
   }
?>
