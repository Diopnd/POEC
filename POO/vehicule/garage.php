<?php
    include_once "vehicule.php";
    
    class Garage
    {
        private  $listvehicule = [];
        

        private string $nom;
        

        public function __construct( string $nom ) 
        {
            $this->nom  = $nom; 
        }                   
 
        public function addVehicule( ?Vehicule &$vehicule  )
        {
            array_push( $this->listVehicule, $vehicule );
        }
    }    
        
?>