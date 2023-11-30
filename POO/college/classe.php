<?php
   include_once "enseignant.php";
 
    class Classe
    {
        protected string $name;       // variable d'instance
        protected ?Enseignant $prof = NULL;       // variable d'instance
        
        
        public function __construct( public ? string $n=NULL ) 
        {
            $this->name  = $n; 
        }                   

        public function __toString() 
        {
            return 'Classe : '.$this->name; 
        }  
        
        public function getName( ) 
        {
            return $this->name;
        }

        public function getEnseignant( ) : ?Enseignant
        {
            return $this->prof;
        }

        public function setEnseignant( Enseignant &$prof )
        {
            $this->prof = $prof;
        }
   }
?>
