function myTable($width, $height)
{
    print('<table>');
    for( $i = 0; $i < $height; $i ++)
    {
        print('<tr>');
            for ( $j = 0; $j < $width; $j ++)
            {
                print( '<td>')
                print(' () ')
                print( '</td>')
            }
        print( '</tr>');
    }
    print( '</table>');
}