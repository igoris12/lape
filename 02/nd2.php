<?php

$number1 = rand(0,4);
$number2 = rand(0,4);

$cunt = 0; 
if ($number1 == 0 || $number2 == 0) echo 'Cant divide by zero.';
elseif($number1 > $number2)   $cunt = round($number1 /$number2, 2); 
else $cunt = round($number2 /$number1, 2); 

echo $cunt;
