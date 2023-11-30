<?php

// https://www.php.net/manual/en/class.datetime.php

$now = new DateTime( 'now' );

print(  $now->format('Y-m-d H:i:s').'<br>' );
print(  $now->format("D, d M Y H:i:s \\G\\M\\T").'<br>' );




print(  $now->format('d-m-Y H:i:s').'<br>' );
print(  $now->format('m/y').'<br>' );


// différence de date
$naissance = new DateTimeImmutable('1961-05-21');
$age = $naissance->diff( $now );
print(  $age->format('%Y ans %m mois  %d jours').'<br>' );

//exit();

// différence de date
$begin  = new DateTime('2023-01-01');
$end    = new DateTime('2023-12-31');

$interval = DateInterval::createFromDateString('7 day');

$period = new DatePeriod( $begin, $interval, $end);

foreach ( $period as $date ) 
{
    print( $date->format("l Y-m-d H:i:s\n").'<br>');
}


// différence de date
$begin  = new DateTime('2023-01-01');
$end    = new DateTime('2023-12-31');

$interval = DateInterval::createFromDateString('7 day');

$period = new DatePeriod( $begin, $interval, $end);

foreach ( $period as $date ) 
{
    print( $date->format("l Y-m-d H:i:s\n").'<br>');
}
print( '=====================<br>');

// différence de date
$begin  = new DateTime('2023-11-10');
$end    = new DateTime('2023-12-31');

$interval = DateInterval::createFromDateString('45676 second');

$period = new DatePeriod( $begin, $interval, $end);

foreach ( $period as $date ) 
{
    print( $date->format("l Y-m-d H:i:s\n").'<br>');
}







?>
