<?php

echo '11. <br>';

$skaiciuKiekis = 0;

$skaiciuStringas = '';

$pirminiai = '';



do {

    $unikalusSkaicius = false;

    do {

        $random = rand(1, 200);

        if (!strpos($skaiciuStringas, $random)) {

            $skaiciuStringas .= $random . ' ';

            $skaiciuKiekis++;

            $unikalusSkaicius = true;

            $pirminis = true;

            for ($i = 2; $i <= $random/2; $i++){

                if ($random % $i == 0) {

                    $pirminis = false;

                }

            }

            if ($pirminis) {

                $pirminiai .= $random . ' ';

            }

        }

    } while (!$unikalusSkaicius);

} while ($skaiciuKiekis < 50);

echo $skaiciuStringas . '<br>';

echo $pirminiai;