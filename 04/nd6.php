<?php



$herbas = 0;
$skaičius = 0;

$game = true;

// 1.

do{
$coin = rand(0,1);

if ($coin== 0) {
$skaičius++;
echo "$skaičius: S";
echo '<br>';
}else {
   $herbas++;
   echo "$herbas: H"; 
   echo '<br>';
}
if ($herbas ==1) {
    $game = false;
}

} while($game);

echo '<br>';
echo '<br>';



// 2.
// do{
// $coin = rand(0,1);

// if ($coin== 0) {
// $skaičius++;
// echo "$skaičius: S";
// echo '<br>';
// }else {
//    $herbas++;
//    echo "$herbas: H"; 
//    echo '<br>';
// }
// if ($herbas ==3) {
//     $game = false;
// }

// } while($game);

echo '<br>';
echo '<br>';
// 3.
// $check = 0;

// do{
// $coin = rand(0,1);

// if ($coin== 0) {
// $skaičius++;
// $check =0;
// echo "$skaičius: S";
// echo '<br>';
// }else {
//    $herbas++;
//    $check++;
//    echo "$herbas: H"; 
//    echo '<br>';
// }
// if ($check  == 3) {
//     $game = false;
// }

// } while($game);



