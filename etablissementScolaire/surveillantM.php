<?php
    include_once "personnelM.php";

    class Surveillant extends Personnel
    {


        public function __toString() 
        {
            return '(Surveillant)'.parent::__toString(); 
        }                   

        public function travailler()
        {
            print("je surveille ");
        }

        public function remunerer()
        {   
            print("je gagne".$this->salaire."<br>");
        }
   }
?>
