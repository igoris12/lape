<?php

$array1 = [];
$array2 = [];
$unique = true;
$arrayLenght = 0;



while ($arrayLenght < 100) {
    $number = rand(100, 999);
    if (!in_array($number, $array1)) {
        $array1 [] = $number;
        $arrayLenght++;
    }
}
$arrayLenght = 0;
while ($arrayLenght < 100) {
    $number = rand(100, 999);
    if (!in_array($number, $array2)) {
        $array2 [] = $number;
        $arrayLenght++;
    }
}
$arrayLenght = 0;

//9

$array3 = [];
$index = 0;

foreach ($array1 as $value1 ) {
        
       $array3 [$value1] =  $array2[$index];
        $index++;
     
}

echo "<pre>";
print_r($array1);
print_r($array2);
print_r($array3);