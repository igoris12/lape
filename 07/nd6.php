<?php

function func (int $par) {
    $dalikilis = 2;
    $array = [];
  while ($dalikilis < $par) {
    //   echo $dalikilis;
      if ($par % $dalikilis == 0) {
        // echo  "<br>";
        // echo $dalikilis.'<br>';
        $array [] =$dalikilis;
        $dalikilis++;
    }
    else {
        $dalikilis++;
    }
  }
  return $array;
}
//6
echo '<pre>';


$array = [];

foreach(range(1, 100) as $i) {
    $array[] = rand(333, 777);
    //test
    // $array[] = rand(1,10);
    
}

print_r($array);
echo '<br>';
echo '<br>';

$newArray = [];
foreach ($array as $key=> $value) {
    //6.1
    // if (count(func($value)) == 0) {
    //     unset($array[$key]);
    // }
    
   //6.2
    if (count(func($value)) != 0) {
        $newArray [] = $value;
    }

    
}

print_r($newArray);
