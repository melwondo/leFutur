<?php

require 'TimeTravel.php';

$TimeTravel = new TimeTravel();

echo $TimeTravel->getTravelInfo();
echo '<br>';

$timeTravel = new TimeTravel();
$interval = new DateInterval('PT1000000000S');


echo '<br>';
echo $timeTravel->findDate($interval);
echo '<br>';

$start = new DateTime( '1985-12-31' );
$end = new DateTime();

$interval = new DateInterval('P1M8D');
$step = new DatePeriod($start, $interval ,$end);


echo '<br>';
print_r($TimeTravel->backToFutureStepByStep($step));

