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

    




// in_array($idNumber, $array)
echo '<pre>';

print_r($array); 
// print_r($idValues); 
