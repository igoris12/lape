<?php
$array = [];
foreach(range(0,9) as $kay => $value) {
    $number = rand(0,5);
    $number2 =rand (0,10);
    if ($number == 0) {
      $array[] = $number2;  
    }else
    {
            foreach(range(0,$number) as $i) {
            $array[$kay][] = rand(0,10);
        }
    }

}
echo '<pre>';
//9 

  function sortt($a, $b) {
      $sumA = 0;
       $sumB = 0;

            if (gettype($a) == 'array') {
                foreach ($a as $i) { 
                    $sumA += $i;
            }
             }else {
                 $sumA += $a;
             }

      if (gettype($b) == 'array') {
        foreach ($b as $i) { 
                    $sumB += $i;
            }
             }else {
                     $sumB += $b; 
                }
      
    
 
    
        return  $sumA -  $sumB;
    };

    usort($array, 'sortt');


print_r($array); 
