<?php

$sting = "*";
$sting2 = "********************";

$content = '';
$content .='<br>';
for($i = 0;  $i < 21; $i++ ) {
    $randColor1 = rand(0,255);
    $randColor2 = rand(0,255);
    $randColor3 = rand(0,255);
    for($j = 0; $j < 2; $j++) {
       if ($i < 10) {
          $content .= "<p style='color:rgb($randColor1, $randColor2, $randColor3); display: inline-block; margin: 0;>
          $sting</p>";
        $sting .= '*'; 
       }else {
        $content .= "<p style='color:rgb($randColor1, $randColor2, $randColor3); display: inline-block; margin: 0;>$sting2</p>";
        $sting2 =substr($sting2, 1);

       }
        
    
  
      
    }
   
     $content .='<br>';
}


echo "<div style='text-align: center; width: 100%;'> <p style='display: inline-block; margin: 0;'>*</p>
 $content</div>";

// $test = substr($content, 1);
// // $test2 = substr($test, 1);
// // $test3 = substr($test2, 1);
// echo "$content";
 

// echo "<p style='display: inline-block; margin: 0;  width: 100%;>$content</p>";