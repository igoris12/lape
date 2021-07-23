<?php 

$number1 = rand(0, 100);
$number2 = rand(0, 100);
$number3 = rand(0, 100);

echo "$number1 : $number2 : $number3 <br>";

$allSum = round (($number1 + $number2 + $number3) / 3 ); 
echo " All sum = $allSum <br>";

$numbersCount = 0;
$AllNumbersValue = 0;
if ($number1 > 9 && $number1 < 91) {
$numbersCount++;
$AllNumbersValue += $number1;
}
if
 ($number2 > 9 && $number2 < 91) {
$numbersCount++;
$AllNumbersValue += $number2;
}
if
 ($number3 > 9 && $number3 < 91) {
$numbersCount++;
$AllNumbersValue += $number3;
}

$filteredSum = round($AllNumbersValue / $numbersCount);

echo "How much passed = $numbersCount <br>";
echo "Sum after filter = $filteredSum";


