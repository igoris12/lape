<?php

$vinisCount = 0;
$smūgiai = 0;
$viniesIlgis = 850;
// 1


for ($i=0; $i< 5; $i++) {
    while ($viniesIlgis >= 0) {
        $viniesIlgis -= rand(5, 20);
        $smūgiai++;
    }
    $vinisCount++;
}

echo "ikalta: $vinisCount";
echo "<br>";

echo "mažais smūgiais: $smūgiai";

// 2

// $viniesIlgis = 850;
// for ($i=0; $i< 5; $i++) {
//     while ($viniesIlgis >= 0) {
//         if (rand(0,1) == 1) {
//             $viniesIlgis -= rand(20, 30);
//         }
        
//         $smūgiai++;
//     }
//     $vinisCount++;
// }

// echo "ikalta: $vinisCount";
// echo "<br>";

// echo "dideliais smūgiais: $smūgiai";
