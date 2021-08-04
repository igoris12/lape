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


echo '<pre>';
print_r(func(4));