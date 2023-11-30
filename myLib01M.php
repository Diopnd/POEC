<?php

    function myHeader( $titre="ma page" )
    {
        $var = "<!DOCTYPE html>
        <html lang=\"en\">
        <head>
            <meta charset=\"UTF-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <title>$titre</title>
            <style>
            td: border: 1px solid black;
            </style>
        </head>
        <body>
        ";
        print( $var );
    }

    function myFooter()
    {
        $var = "
        </body>
        </html>
        ";
        print( $var );
    }

    function myTable( $width, $height, $smiley=' () ' )
    {   
        
        print( "<table>\n");
        for( $i=0 ; $i<$height ; $i++)
        {
            print( "<tr>\n");
            for( $j=0 ; $j<$width ; $j++ )
            {
                print( "<td>\n");
                print( $smiley );
                print( "</td>\n");
            }
            print( "</tr>\n");
        }
        print( "</table>\n");
    }

    function myNewTable($persons)
    {
        print( "<table>\n");
        
        foreach($persons as $person)
        {   
            foreach($person as $cellule)
            print($cellule . ' ');
            print('<br>');
        }
        print( "</table>\n");
    }


?>
