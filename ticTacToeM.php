<style>
    td{
        border: 1px solid black;
    }
</style>



<?php
require "myLib01M.php";
    
    myHeader( 'toto' );
    print( '<h1>HELLO</h1>'  );

    $dataGame = [

        ['()', 'X', '()'],
        ['()', '()', '()'],
        ['()', 'X', '()']
    ];

    myNewTable(($dataGame));


?>