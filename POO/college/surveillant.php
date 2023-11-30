<?php
    include_once "personnel.php";

    class Surveillant extends Personnel
    {
        
        public function __toString() 
        {
            return '(Surveillant)'.parent::__toString(); 
        }  
        
        public function travailler()
        {
            //parent::travailler();
            print( "je surveille...<br>");
        }
   }
?>
