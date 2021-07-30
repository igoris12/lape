<?php

$array = [];

foreach(range(0,9) as $kay => $value) {
    $number = rand(0,5);
    $number2 =rand (0,10);
    if ($number == 0) {
      $array[] = $number2;  
    }else
    {
            foreach(range(0,$number) as $i) {
            $array[$kay][] = rand(0,10);
        }
    }

}

echo '<pre>';
print_r($array); 
