<?php

$array = [];
$idNumber = rand(1 , 1000000);
$rowNumber = rand(0 , 100);
//  rand(0 , 100)
$idValues = [];
$rowValues = [];
foreach(range(0,29) as $i) {
    $array[$i]= ["user_id" => 1, "place_in_row" => 2];
}

    foreach ($array as $key => $value) {
         while(in_array($idNumber, $idValues)) {
             $idNumber = rand(1 , 1000000); 
         }
        $idValues[] = $idNumber;
        $array[$key]["user_id"] = $idNumber;

           while(in_array($rowNumber, $rowValues)) {
            $rowNumber = rand(0 , 100);
         }
        $rowValues[] = $rowNumber;
        $array[$key]["place_in_row"] = $rowNumber;
    }

//6
echo '<pre>';
// sort with usert beters
sort($array); 
print_r($array); 

 //6.2
    function sortt($a, $b) {
        return $b['place_in_row'] > $a['place_in_row'];
    };


    usort($array, 'sortt');
echo '<br><br><br>';
print_r($array); 
