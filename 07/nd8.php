<?php

function funcH () {
$array =[0];
$array2 = [];
$array3 = [];


for ($i = 0; $i< rand(10,20); $i++) {
    
   foreach (range(1, rand(10,20)) as $_) {
    $array2[] = rand(0,10);
   }

   $array3[]= $array;
   $array2 [] = $array;
   $array =  $array2;
   $array2 = [];
}

return $array;
}

function look ($array) {
    static $sum = 0;
    // echo count($array);
    for($i = 0; $i < count($array); $i++) {
        if (gettype($array[$i]) == "integer") {
            $sum += $array[$i];
        }
        else 
        {
            look($array[$i]);
        }
    }
    return $sum;
}

$array = funcH ();

echo look($array);



echo '<pre>';
print_r ($array);
