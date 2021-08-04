
<?php

// function funcFilter (int $par) {
//     $dalikilis = 2;
//     $array = [];
//   while ($dalikilis < $par) {
//       if ($par % $dalikilis == 0) {
//         $array [] =$dalikilis;
//         $dalikilis++;
//     }
//     else {
//         $dalikilis++;
//     }
//   }
//   return $array;
// }

// function funcRender ($array) {
//     $array = [];
//     foreach (range(1,3) as $i) {
//         $array [] = rand (1,33);
//     }
//     return $array;
// }

// function funcLook ($array) {
  
//      foreach ($array as $key =>$value) {
//        if (gettype($array) == 'array') {
//        }
//     return $array;
// }
// }


// function funcBook ($array) {
//        foreach ($array as $key =>$value) {
//         if (count(funcFilter($value)) != 0) {

//             $array[$key] = funcRender($array[$key] = []);
//             $array[$key] =  funcBook($array[$key]);
            
            
//         }else {
//             return $array;
//         }
//     }
//     return $array;
// }

// function func () {
//      $array= [];
//     $array = funcRender($array);
//      $array = funcBook($array);
    
  


//     return $array;
// }

// echo '<pre>';

// print_r(func());

//

// $array9=[];
// foreach(range(0,2) as $i){
//     $array9[]=rand(1,33);
// }
// function test(&$array)
// {
//     $arr = array_slice($array, -3, 3);
//     foreach ($arr as $value) {
//         if (dalyba($value)) {
//             $random = rand(1, 33);
//             $array[] = $random;
//             //print_r($array);
//             test($array);
//             break;
//         }
//     }
// }
// test($array9);

// $m = [];

// for ($i=0; $i < 3; $i++) { 

//     $m[] = rand(1, 33);

// }

// echo '<pre>' ;

// print_r($m);

// echo '</pre>';

// function ifPrime($int){     

//     if ($int == 1) 

//     return 0; 

//     for ($i = 2; $i <= $int/2; $i++){ 

//         if ($int % $i == 0) 

//             return 0; 

//     } 

//     return 1; 

// } 

// while (

//     !ifPrime($m[count($m)-1]) ||

//     !ifPrime($m[count($m)-2]) ||

//     !ifPrime($m[count($m)-3]) 

// ) {

//     $m[]= rand(1,33);

// }   

// function exercise9()

// {

//     $arrayNine = [];

//     $lastThreeCount = 0;



//     for ($i = 0; $i < 3; $i++) {

//         $arrayNine[] = rand(1, 33);

//     }



//     do {

//         foreach (array_slice($arrayNine, -3) as $index => $value) {

//             if (exercise4($value) > 0) {

//                 $arrayNine[] = rand(1, 33);

//                 $lastThreeCount = 0;

//                 break;

//             } else {

//                 $lastThreeCount++;

//             }

//         }

//     } while ($lastThreeCount !== 3);




//     var_dump($arrayNine);

// }

// exercise9();