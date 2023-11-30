<?php

function sayHello($nom, $prenom)
{
    print("Hello $nom $prenom");
}


function sayHelloReturn($nom, $prenom)
{
    return("Hello $nom $prenom");
}


function sayHelloReturnH1($nom, $prenom)
{
    return("Hello $nom $prenom");
}


print(sayHelloReturn('Bond', 'James'));

sayHello('Mauer', 'Mathias');
?>