<?php

/* For */

    for ($a = 0; $a <= 10; $a ++)
    {
        for ($b = 0; $b <= 10; $b ++)
            echo '*';
        echo '<br>';
    }


    for ($b = 0; $b < 10; $b = $b +2)
        echo "$b<br>";

/* While */

echo '<br>';
echo 'Boucle While';
echo '<br>';

$c = 0;

while ($c <= 5)
{
    echo "$c<br>";
    $c += 1;
}


/* Break and Continue */

echo '<br>';
echo 'Boucle Infinie, stop avec Break';
echo '<br>';

$c = 0;

while (1)
{
    echo "$c<br>";
    $c += 1;
    if ($c == 10)
    {
        break;
    }
}

$colors = array("red", "green", "blue", "yellow");

foreach($colors as $value)
{
    echo "$value <br>";
}

?>