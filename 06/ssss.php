<?php

$array = [];
$arrayABC = range('A', 'Z');

foreach (range(0, 9)as $col) {
    foreach (range(0, rand(2, 20)) as $row) {
        $array[$col][$row] = $arrayABC[rand(0,25)];

    }
    sort($array[$col]);
}

echo '<pre>';

//4
$array4 = [];
$arrayCheck = [];


foreach ($array  as $key => $col) {
    // if (count($array[$key]) > count($array4)) {
    //     $array4 = [];
    //     $array4 []= $array[$key];
    // }
}

sort(count($array[$key]);

echo count($array[0]);

print_r($array);
print_r($array4 );

//hujet 