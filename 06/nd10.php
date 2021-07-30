<?php

$arrayCol = range('a','z');
$arrayCol2 = range(0,9);
$arrayS = ['#','%','+','*','@','裡'];
$array = [];
 
foreach($arrayCol2 as $value)  {
    $arrayCol[] = $value;
}

foreach(range(0,9) as $i) {
    foreach (range(0,9) as $j) {
        foreach (range(0,9) as $k) {
            $array[$i][$j]['color'] = '#';
            for ($y= 0; $y< 6 ;$y++) {
                $array[$i][$j]['color'].= $arrayCol[rand(0,35)];
            }
                
            
            $array[$i][$j]['value']= $arrayS[rand(0,5)];
        
        }
        
    }
}
 
for($x =0;$x<10; $x++) {
    for($v=0; $v<10; $v++) {
        $color = $array[rand(0,9)][rand(0,9)]['color'];
        $value = $array[rand(0,9)][rand(0,9)]['value'];
        echo "<p  style=' color: $color; display: inline-block; margin: 0; margin-right: 10px;'>$value</p>";
    }
    echo "<br>";
}


echo '<pre>';

// print_r($arrayCol);
// print_r($array);
