<?php

$rNumber = 0;
$array1 = [];
$array2 = [];
$array3 = [];


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


echo "<pre>";
print_r($array1);

print_r($array2);

print_r($array3);

//hujeta

