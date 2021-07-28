<?php

$array = [];

for ($i= 0 ; $i <10; $i++) {
    if (count($array) <2) {
        $array[] = rand(5,25);
    }
    else {
        $array[] = $array[count($array)-2] +$array[count($array)-1];
    }
    
}


echo '<pre>';
echo count($array);

print_r($array);