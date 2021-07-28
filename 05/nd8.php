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

//8 

$array3 = [];
$forst = false;
//1.0
// $array3[] = $array1;
// $array3 [] =  $array2;
// 2.0

foreach ($array2 as $value2 ) {
    if (!$forst) {
        foreach ($array1 as $value1) {
        $array3 [] = $value1;
        $forst = true;
        }
    }
     $array3 [] = $value2;
}

echo "<pre>";

print_r($array1);
print_r($array2);
print_r($array3);