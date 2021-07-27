<?php

$randomNumber = rand(3000, 4000);
$number = 0;
for ($i =1; $i <$randomNumber; $i++) {
 
    if ($i%77 == 0 ) {
        echo "<p style='display: inline-block; font-size: 12px'>$i</p>";
        if($randomNumber -77 > $i){
            echo ',';
        }
        
    }

}