
<?php

function funcFilter (int $par) {
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

// function funcRender () {
//     $array = [];
//     foreach (range(1,3) as $i) {
//         $array [] = rand (1,33);
//     }
//     return $array;
// }


function func () {
    $array = [];
    $array2 = [];
    foreach (range(1,3) as $i) {
        $array [] = rand (1,33);
    }
    foreach ($array as $key =>$value) {
        if (count(funcFilter($value)) != 0) {
            if (count(funcFilter($value)) == 0) {
                return;
            }
            // $array[$key] = func();
        }
    }

    return $array;
}

echo '<pre>';

print_r(func());