<?php



function funcH () {
$array =[0];
$array2 = [];


$number = rand(10,20);

for ($i = 0; $i< rand(10,20); $i++) {
    
   foreach (range(1, $number-1) as $_) {
    $array2[] = rand(0,10);
   }

   $array2 [] = $array;
   $array =  $array2;
   $array2 = [];
}

return $array;
}


echo '<pre>';

print_r(funcH());

// $a = [0];
// $a1 = [1,2,4];
// $a3 = [];

// $a3 []= $a;
// $a1 []=  $a;
// $a = $a1;

// $a1 = [2,2,2];
// $a3 []= $a;
// $a1 []=  $a;
// $a = $a1;

// $a1 = [3,3,3];
// $a3 []= $a;
// $a1 []=  $a;
// $a = $a1;
// print_r($a);
