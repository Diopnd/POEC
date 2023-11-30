<?php
    include_once "facture01.php";
    include_once "client01.php";

    class FactureCpt extends Facture
     {
        static int $nbrFacture = 0;
        
        public function __construct( Client $c ) 
        {
            parent::__construct( $c );
            FactureCpt::$nbrFacture++;
        }                   

        public function edit( ) 
        {
            parent::edit();
            print(  "<br>num Facture : ".FactureCpt::$nbrFacture.'<br>' );
        }

        public function getArticle( int $numLigne )
        {
           return $this->articles[ $numLigne-1 ]; 
        }
        
        public function getArticleByName( string $name )
        {
            foreach ( $this->articles as $line) 
                if ( $line['art']->getNom() == $name )
                    return $line['art'];
            return NULL;
        }
        
        public function deleteArticleByName( string $name )
        {
            foreach ( $this->articles as $line) 
                if ( $line['art']->getNom() == $name )
                {
                    $pos = array_search( $line, $this->articles);
                    //array_diff( $this->articles, $line );    
                    unset( $this->articles[ $pos ]  );
                } 
        }
        
        public function modifyQtyArticleByName( string $name, int $qte )
        {
            $art  = $this->getArticleByName( $name );
            $this->deleteArticleByName( $name );
            $this->addArticle( $art, $qte );
        }
        
        public function setArticle( int $numLigne, $art )
        {
           $this->articles[ $numLigne-1 ] = $art; 
        }

        public function setQteArticle( int $numLigne, int $qte )
        {
            //var_dump( $this->articles  );
            if ( $qte == 0 )
                unset( $this->articles[ $numLigne-1 ] );
            else 
            {
                $art = $this->getArticle( $numLigne );
                $art[ 'qte'] =  $qte;
                $this->setArticle( $numLigne, $art );
            }
            print( '<br><br>' );
            //var_dump( $this->articles  );
        }

        

        
    }
?>
