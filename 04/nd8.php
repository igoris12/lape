<?php

$sting = '*';
$content = '';
for($i = 0;  $i< 21; $i++ ) {
    for($j = 0; $j < 1; $j++) {
       if ($i <10) {
        $content .= "<p style='display: inline-block; margin: 0;  width: 100%;>$sting</p>";
        $sting .= '*';
    }  
    elseif ($i >10) {
        $content .=substr($sting, $i);
        
    }
      
    }
   
     $content .='<br>';
}


echo "<div style='background-color: red; text-align: center;'>$content</div>";