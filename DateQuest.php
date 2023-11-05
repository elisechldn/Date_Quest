<?php

$presentTime = new DateTime;
echo $presentTime-> format('M-d-Y a h i');


$destinationTime = new DateTime;
$destinationTime -> setDate(2069, 10, 31);
$destinationTime -> setTime(14,30,45);
$destinationTime -> format('g a i');

$interval = $presentTime->diff($destinationTime);
echo $interval->format('%R%y%R%m%R%d%R%h%R%i');

var_dump($destinationTime->format('g a i'));