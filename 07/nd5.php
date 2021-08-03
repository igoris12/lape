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

//5
$array = [];

foreach(range(1, 100) as $i) {
    $array[] = rand(33, 77);
    //test
    // $array[] = rand(1, 10);
}
echo '<pre>';
print_r($array);

usort($array, function ($a,$b) {
    return count(func($a)) < count(func($b));
});

echo '<br>';
echo '<br>';

print_r($array);


