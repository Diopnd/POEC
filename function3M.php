



<?php
    require "myLib01M.php";
    
    myHeader( 'toto' );
    print( '<h1>HELLO</h1>'  );

    $data = [

        ['jean', 'dupont'],
        ['james', 'bond'],
        ['barry', 'white'],
        ['john', 'doe']

    ];

    myNewTable(($data));


    myTable(10, 4, "*-*");
    myFooter();
?>