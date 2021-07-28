<?php

$rNumber = 0;
$array1 = [];
$array2 = [];
$array3 = [];

$array4 =[];


for ($i=0; $i<200; $i++) {
    $rNumber=rand(0,3);
    if ($rNumber == 0) {
       $array1[] = 'A';
    }
    elseif ($rNumber == 1) {
       $array1[] = 'B';
    }
    elseif ($rNumber == 2) {
       $array1[] = 'C';
    }
    elseif ($rNumber == 3) {
       $array1[] = 'D';
    }
}
for ($i=0; $i<200; $i++) {
    $rNumber=rand(0,3);
    if ($rNumber == 0) {
       $array2[] = 'A';
    }
    elseif ($rNumber == 1) {
       $array2[] = 'B';
    }
    elseif ($rNumber == 2) {
       $array2[] = 'C';
    }
    elseif ($rNumber == 3) {
       $array2[] = 'D';
    }
}
for ($i=0; $i<200; $i++) {
    $rNumber=rand(0,3);
    if ($rNumber == 0) {
       $array3[] = 'A';
    }
    elseif ($rNumber == 1) {
       $array3[] = 'B';
    }
    elseif ($rNumber == 2) {
       $array3[] = 'C';
    }
    elseif ($rNumber == 3) {
       $array3[] = 'D';
    }
}

foreach ($array3 as $key =>$value) {
   $array4 [] = $array2[$key].$array2[$key].$array3[$key];
}

$arrayInfo = array_count_values($array4);
$groupsNumber = count($arrayInfo);
$oneGroup = 0;


echo "<pre>";
print_r($array1);

print_r($array2);

print_r($array3);
print_r($array4);
print_r($arrayInfo);
echo '<br>';
echo "$groupsNumber: groups";
echo '<br>';
echo "$oneGroup : uniq group";
//hujeta

