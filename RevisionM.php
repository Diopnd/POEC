<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="welcome.php" method="post">
Age: <input type="text" age="age"><br>
<input type="submit">
</form>
</body>
</html> -->


<?php


function validateAge($age) {
    if ($age >= 99)
{
    print( "tu es à la retraite");
}
elseif ($age >= 18)
{
    print( "Bravo tu as ton permis");
}
elseif ($age >= 11)
{
    print( "tu es au collège");
}
elseif ($age >= 15)
{
    print( "tu es au lycée");
}
elseif ( $age >= 6 )
{
    print( "tu es en primaire");
}
else 
{
    print( "tu es en maternelle" );
}
}

validateAge(7);

?>
