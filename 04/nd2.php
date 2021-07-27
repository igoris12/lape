<?php
$array = [];
$more150 = 0;

for ($i =0; $i <300; $i++) {
    array_push($array, rand(0, 300));

if ($array[$i] >275) {
echo  "<p style='color: red; display: inline-block;  margin-left: 5px;'>$array[$i]</p>";
}else {
    echo  "<p style='display: inline-block;  margin-left: 5px;'>$array[$i]</p>";
}

    

    if ($array[$i]> 150) {
        $more150++;
    }

}

echo '<br>';
echo "Biger than 150: $more150";
