<?php


// echo '10.<br>';

// $tenArr= [];

// foreach(range(0, 9) as $y) {

//     foreach(range(0, 9) as $x) {

//         $tenArr[$y][$x] = rand(1, 100);

//     }

// }



// function checkArr(&$array) {

//     $primeValues = 0;

//     $primeCount = 0;



//     foreach($array as $subArr) {

//         foreach($subArr as $value) {

//             if (divisionCount($value) === 0) {

//                 $primeValues += $value;

//                 $primeCount++;

//             }

//         }

//     }

//     if ($primeValues/$primeCount < 70) {

//         $smallest = PHP_INT_MAX;

//         $y = 0;

//         $x = 0;

//         foreach($array as $ykey => $subArr) {

//             foreach($subArr as $xkey => $value) {

//                 if ($value < $smallest) {

//                     $smallest = $value;

//                     $y = $ykey;

//                     $x = $xkey;

//                 }

//             }

//         }

//         $array[$y][$x] += 3;

//         echo 'Send';

//         checkArr($array);

//     } else {

//         return;

//     }

// }



// checkArr($tenArr);

// print_r($tenArr);