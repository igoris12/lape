<?php

$kazys = 0;
$petras = 0;
$game = true;

do {
$petras +=rand(10,20);
$kazys+= rand(5,25);
echo "$kazys Kazys";
echo '<br>';
echo "$petras Petras";
echo '<br>';
if ($kazys >= 222) {
  echo " Partiją laimėjo: ​laimėtojo Kazys";
$game = false;
}
elseif($petras >=222)   {
echo " Partiją laimėjo: ​laimėtojo Petras";
$game = false;
}



} while ($game);
