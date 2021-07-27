<?php


$content = '';
$count = 0;

for ($i =0; $i <99; $i++) {
    for ($j =0; $j <100; $j++) {
        if ($count == $i && $count == $j) {
        $content .= "<p style='color:red; display: inline-block; margin:0; margin-right:9px; font-size: 7px; 
         >*</p>";
            
        }else {
            $content .= "<p style='display: inline-block; margin:0; margin-right:10px; font-size: 5px; 
         >*</p>";
        }
       
    } $count++;
    $content .= '<br>';
}

echo "<div style='display: inline-block;' >$content</div>";
    

