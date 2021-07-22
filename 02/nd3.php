<?php

$number1 = rand(0, 25);
$number2 = rand(0, 25);
$number3 = rand(0, 25);

echo "$number1 : $number2 : $number3 <br>";

if ($number1 > $number3 && $number1 < $number2 ||$number1 < $number3 && $number1 > $number2) 
echo "$number1";
elseif ($number2 > $number3 && $number2 < $number1 ||$number2 < $number3 && $number2 > $number1)
echo "$number2";
elseif ($number3 > $number2 && $number3 < $number1 ||$number3 < $number2 && $number3 > $number1)
echo "$number3";
else {
    echo 'two numbers are even';
}