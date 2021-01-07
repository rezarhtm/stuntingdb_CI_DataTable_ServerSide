<?php
$now = date("Y-m");
$year = substr($now, 2, 2);
$mo = substr($now, 5, 2);
$kd = 88;
$ran = rand(10,99); #1000-9999

$hasil = 7 . $year . $mo . $kd . $ran;

echo $hasil;
