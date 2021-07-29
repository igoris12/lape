<?php


$array = [];


foreach(range(1,10) as $i) {
   foreach(range(1,5) as $j) {
    $array [$i][$j]= rand(5,25);
    
  }
}

//A 
$sk = 0;

foreach ($array as $col) {
    foreach ($col as $row) {
        if ($row > 10) {
            $sk++;
        }
    }
}

echo "<br>A<br>";

echo '<pre>';
echo "Biger then 10: $sk <br>";

// b 
$max = PHP_INT_MIN;
foreach ($array as $col) {
    foreach ($col as $row) {
        if ($row > $max) {
            $max = $row;
        }
    }
}
echo "<br>B<br>";

echo "Max value: $max <br>";


// c

$arrayC = [];
foreach(range(1,5) as $_) {
$arrayC [$_] = 0;
}

foreach ($array as $kayC =>  $col) {
    foreach ($col as $kayR => $row) {
      $arrayC[$kayR] += $row;
    }
}


echo "<br>C<br>";

print_r($arrayC);


// d

foreach ($array as $kayC =>$col) {
    foreach (range(1, 2) as $_) {
        $array[$kayC][] = rand(5,25);
    }
}
echo "<br>D<br>";

print_r($array);


//e

$arrayE = [];
$sum = 0;

foreach ($array as $kayC =>  $col) {
    $sum = 0;
    foreach ($col as $kayR => $row) {
       $sum += $row;
    }
    $arrayE [] = $sum;
}
echo "<br>E<br>";
print_r($arrayE);

// print_r($array);
