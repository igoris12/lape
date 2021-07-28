<?php


$rNumber = 0;
$array = [];


for ($i=0; $i<200; $i++) {
    $rNumber=rand(0,3);
    if ($rNumber == 0) {
       $array[] = 'A';
    }
    elseif ($rNumber == 1) {
       $array[] = 'B';
    }
    elseif ($rNumber == 2) {
       $array[] = 'C';
    }
    elseif ($rNumber == 3) {
       $array[] = 'D';
    }
}

sort($array);

echo '<pre>';

print_r($array);