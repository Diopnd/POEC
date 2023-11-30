<?php
    try
    {
        $file = fopen("testUnit3.php", "r");
        
        $cpt = 0;
        while ( ( $line = fgets($file)) !== false ) 
        {
            print( ++$cpt.' '.$line.'<br>');
        }
        fclose($file);
    }
    catch (Exception $e) 
    {
        print( 'Caught exception: '. $e->getMessage() );
    }
?>
