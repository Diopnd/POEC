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

    function myTable( $width, $height, $carac='()' )
    {
        print( "<table>\n");
        for( $i=0 ; $i<$height ; $i++ )
        {
            print( "<tr>\n");
            for( $j=0 ; $j<$width ; $j++ )
            {
                print( "<td>");
                print( $carac );
                print( "</td>\n");
            }
            print( "</tr>\n");
        }
        print( "</table>\n");
    }


    function myTableList( $data )
<<<<<<< HEAD
    {   print( '<table>' );
=======
    {
        print( '<table>' );
>>>>>>> origin/xavier
        for( $i = 0 ; $i < count( $data ) ; $i++ )
        {
            print( '<tr>' );
            for( $j = 0 ; $j < count( $data[$i] ) ; $j++ )
                print( '<td>'.$data[ $i ][ $j ].'</td>' );
            print( '</tr>' );
        }
        print( '</table>' );
    }


    function createForm( $urlAction, $name,  $message="" )
    {
        print( '<form action="'.$urlAction.'" method="post">');
            print(' <input type="text" name="'.$name.'" placeholder="'.$message.'" />'); 
            print(' <input type="submit" name="submit" value="OK" />');
        print(' </form>');
    }

    function startForm( $urlAction )
    {
        print( '<form action="'.$urlAction.'" method="post">');
    }

    function endForm( )
    {
        print(' <input type="submit" name="submit" value="OK" />');
        print(' </form>');
    }

    function createInput( $name,  $message="", $value=""  )
    {
        print(' <input type="text" name="'.$name.'" placeholder="'.$message.'" value="'.$value.'" />'); 
        print( '<br>' );
    }
?>

