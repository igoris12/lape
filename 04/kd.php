<?php

// $sriuba = rand(260, 300);

// $saukstuKiekis = 0;

// do {
//     $sriuba -= rand(7, 10);
//     $saukstuKiekis++;

//  if ($sriuba < 0) {
//      $sriuba = 0;
//  }
// }
//  while ($sriuba > 0);


//  echo $saukstuKiekis,'<br>', $sriuba;

echo '<br>';


 $kepsnys = rand(300, 350);
 $sakuciuKiekis = 0;
 $krimstelėjimuKiekis = 0;


do {
    $sakuciuKiekis++;
    $kasnis = rand(7, 10);
    $kepsnys -=$kasnis;

  if ($kepsnys < 0) {
     $kepsnys = 0;
 }  

   do {
      $krimstelėjimuKiekis++;
      $kasnis -= rand(4,6);
   
            if ($kasnis < 0) {
            $kasnis = 0;
        }

   } while($kasnis > 0);

 
}
 while ($kepsnys > 0);

echo '<br>';
echo "$sakuciuKiekis sakuciuKiekis <br>";
echo "$krimstelėjimuKiekis kramtyti <br>";
echo" $kepsnys g. <br>";
