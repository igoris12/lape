<?php

function funcH () {
$array =[0];
$array2 = [];
$array3 = [];
$number = rand(10,20);

for ($i = 0; $i< rand(10,20); $i++) {
    
   foreach (range(1, $number-1) as $_) {
    $array2[] = rand(0,10);
   }

   $array3[]= $array;
   $array2 [] = $array;
   $array =  $array2;
   $array2 = [];
}

return $array;
}


echo '<pre>';