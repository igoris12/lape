
<?php

function funcFilter (int $par) {
    $dalikilis = 2;
    $array = [];
  while ($dalikilis < $par) {
      if ($par % $dalikilis == 0) {
        $array [] =$dalikilis;
        $dalikilis++;
    }
    else {
        $dalikilis++;
    }
  }
  return $array;
}

function funcRender () {
    $array = [];
    foreach (range(1,3) as $i) {
        $array [] = rand (1,33);
    }
    return $array;
}

function funcLook ($array) {
  
     foreach ($array as $key =>$value) {
        if (count(funcFilter($value)) != 0) { 
            $array[$key] = funcRender();
        }
    return $array;
}
}




function func () {
    $array = funcRender();
     $array2 = [];
    
    foreach ($array as $key =>$value) {
        if (count(funcFilter($value)) != 0) {
            
            $array[$key] = funcRender();
            funcLook($array[$key]);
        }



    }


    return $array;
}

echo '<pre>';

print_r(func());