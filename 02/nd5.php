<?php

$number1 = rand(0,2);
$number2 = rand(0,2);
$number3 = rand(0,2);
$number4 = rand(0,2);

$zeroCount = 0;
$oneCount = 0;
$twoCount = 0;

echo "$number1 : $number2 : $number3 : $number4 <br>";

($number1 == 0) ? $zeroCount++ : (($number1 == 1) ? $oneCount++ : $twoCount++ );
($number2 == 0) ? $zeroCount++ : (($number2 == 1) ? $oneCount++ : $twoCount++ );
($number3 == 0) ? $zeroCount++ : (($number3 == 1) ? $oneCount++ : $twoCount++ );
($number4 == 0) ? $zeroCount++ : (($number4 == 1) ? $oneCount++ : $twoCount++ );

echo "zeroCount = $zeroCount <br> oneCount = $oneCount <br> twoCount = $twoCount";