<?php
    include_once "personnel.php";

    class Enseignant extends Personnel
    {
        protected ?Classe $classe = NULL;

        public function __toString() 
        {
            return '(Enseignant)'.parent::__toString(); 
        }  
        
        public function travailler()
        {
            //parent::travailler();
            print( "j'enseigne...<br>");
        }

        public function affecterALaClasse( Classe &$classe )
        {
            $this->classe  = $classe;
            $classe->setEnseignant( $this );
        }
   }
?>
