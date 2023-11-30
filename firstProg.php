<?php

$myName = "Mathias";
$age = 15;


// echo gettype($myName);

// echo "nom: $myName <br> age: $age";

// $age = $age - 2;
// echo ' <br>';
// print ("My new age is $age");



/* Conditions 1st part */

echo ("We check your authorization..");
echo ' <br>';

if ($age >= 18 || $myName=='Mathias')
{
    echo ("This is Ok for you");
}
elseif($age < 5)
{
    echo "Too young!";
}
else
{
    echo ("This is not for you bro'");
}


/* Conditions 2nd part*/
echo ' <br>';
echo ' <br>';

$temperature = 35;

if ($temperature < 10)
{
    echo "very very cold";
}
elseif ($temperature < 15)
{
    echo "it's cold";
}
elseif ($temperature < 30)
{
    echo "this is good";
}
else
{
    echo "this is too hot";
}

?>