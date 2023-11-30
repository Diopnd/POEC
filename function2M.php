<?php



// function add($nb1, $nb2)
// {
//     return $nb1+$nb2;
// }

// print(add(3, 5));

function sum($liste)
{   
    $total = 0;
    foreach($liste as $note)
        $total += $note;
        return $total;
    
}
$notes = [6,5,9,8,7];

print("la somme des notes est ". sum($notes));



function middle($liste)
{   
    $total = 0;
    foreach($liste as $note)
        $total += $note;
    $mid = $total/count($liste);
    return $mid;
    
}

function middXavier($liste)
{
    return sum($liste)/count($liste);
}


function middXavierTop($liste)
{
    return array_sum($liste)/count($liste);
}


function middleAmeliorateGabriel($notes)
{   
    $total = sum($notes);
    $mid = $total/count($notes);
    return $mid;
    
}

print("la moyenne des notes est ". middXavierTop($notes));

print("la moyenne des notes est ". middleAmeliorateGabriel($notes));

print("la moyenne des notes est ". middle($notes));

print("la moyenne des notes est ". middXavier($notes));
?>