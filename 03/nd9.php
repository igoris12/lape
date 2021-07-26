<?php

$sting1 = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood';
$sting2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';



function lenghtCheck ($stirng) {

$stingArry1 = explode(' ',$stirng);

$more = 0;
$less = 0;

    for ($i = 0; $i < sizeof($stingArry1); $i++) {

    if (strlen($stingArry1[$i] )> 5) {
        $more++;

        }
    elseif (strlen($stingArry1[$i] ) < 5) {
        $less++;

        }
    }
echo "Longer then 5: $more";
echo '<br>';
echo "Shorter then 5: $less";
echo '<br>';

}

lenghtCheck($sting1);
echo '<br>';
lenghtCheck($sting2);





