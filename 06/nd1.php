<?php

$array = [];

foreach(range(1,10) as $i) {
   foreach(range(1,5) as $j) {
    $array [$i][$j]= rand(5,25);
  }
}

echo '<pre>';

print_r($array);