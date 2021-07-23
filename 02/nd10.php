<?php

$hours = rand(0, 23);
$nimutes = rand(0, 59);
$seconds = rand(0, 59);

$extraSeconds = 355;



if ($hours < 10 ) echo "0$hours : $nimutes : $seconds <br> <br>";
elseif ($nimutes < 10 ) echo "$hours : 0$nimutes : $seconds <br> <br>"; 
elseif ($seconds < 10 ) echo "$hours : $nimutes : 0$seconds <br> <br>"; 
else echo "$hours : $nimutes : $seconds <br> <br>"; 




$nimutes += round($extraSeconds / 60);
$seconds += $extraSeconds % 60;

if ($seconds > 59) {

    $seconds -= 60;
}
if ($nimutes > 59) {
   $hours++; 
    $nimutes -= 60;
}

if ($hours >23) {
    $hours= 0;
}

if ($hours < 10 ) {
    echo "$extraSeconds <br><br>";
    echo "0$hours : $nimutes : $seconds <br>";
} 
elseif ($nimutes < 10 ) {
    echo "$extraSeconds <br><br>";
    echo "$hours : 0$nimutes : $seconds <br> <br>";
} 
elseif ($seconds < 10 ) {
    echo "$extraSeconds <br><br>";
     echo "$hours : $nimutes : 0$seconds <br> <br>"; 
}

else {
echo "$extraSeconds <br><br>";
echo "$hours : $nimutes : $seconds <br>";  
}
