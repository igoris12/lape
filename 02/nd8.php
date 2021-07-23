<?php

$howMuchCandles = rand(5, 3000);

if ($howMuchCandles < 1001)  echo "For $howMuchCandles candles need to pay $howMuchCandles EUR";
elseif ($howMuchCandles > 1000 && $howMuchCandles < 2001 ){
    $howMuch = round( $howMuchCandles - $howMuchCandles / 100 * 3, 2);
    echo "For $howMuchCandles candles need to pay $howMuch EUR";
}
elseif ($howMuchCandles > 2000) {
     $howMuch = round( $howMuchCandles - $howMuchCandles / 100 * 4, 2);
     echo "For $howMuchCandles candles need to pay $howMuch EUR";
}
   