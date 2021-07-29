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

print_r($array);
// print_r($arrayABC);