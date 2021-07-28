<?php

$rNumber = 0;
$array = [];
$a =0;
$b =0;
$c =0;
$d =0;

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

foreach ($array as $value) {
 if ($value == 'A') {
      $a++;
    }
    elseif ($value == 'B') {
       $b++;
    }
    elseif ($value == 'C') {
       $c++;
    }
    elseif ($value == 'D') {
       $d++;
    }
}

echo '<pre>';


echo "A $a <br>";
echo "B $b <br>";
echo "C $c <br>";
echo "D $d <br>";
