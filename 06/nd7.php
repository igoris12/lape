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


echo '<pre>';
    function sortt($a, $b) {
        return $b['place_in_row'] - $a['place_in_row'];
    };
    usort($array, 'sortt');

// print_r($array); 
$arrayABC = range('A', 'Z');
//7
foreach ($array as $key => $value) {
    $array[$key]['name'] = $arrayABC[rand(0,25)];
    $array[$key]['surname'] = $arrayABC[rand(0,25)];
  
    for ($i = 0; $i< rand(5,15) ; $i++) {
     $array[$key]['name'] .= $arrayABC[rand(0,25)];
    }
    for ($i = 0; $i< rand(5,15) ; $i++) {
     $array[$key]['surname'] .= $arrayABC[rand(0,25)];
    }
   
}


print_r($array); 
