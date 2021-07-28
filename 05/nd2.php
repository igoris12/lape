<?php
$array = [];
$bigerThen10 = 0;
$maxValueCount = 0;
$c1 = 0;


for ($i=0; $i<30; $i++) {
$array[] = rand(5,25);
}
sort($array);

echo "<pre>";

print_r($array);




foreach ($array as $key => $value) {
   if ($value > 10) {
       $bigerThen10++;
   }
//b
   if ($value == $array[29]) {
        $maxValueCount++;
   }

   //c
   if ($key%2 ==0) {
        $c1 += $key;
   }
}

echo $bigerThen10;
//b
echo "<br>";
echo  "Max value is : $array[29]: $maxValueCount ";
echo "<br>";
//c
echo  "c1 = $c1";
echo "<br>";


//d
$arrayd = [];

foreach ($array as $key => $value) {
    $arrayd[] = $value - $key;

   }
echo "d.1 <br>";
   print_r( $arrayd);

   //e
   echo "e.1 <br>";
   $arrayE = $array;

for ($i= 0; $i<10; $i++) {
    $arrayE[] = rand(5,25);
}
   print_r( $arrayE);

      //f
   echo "F.1 <br>";

   $arrayE1 = [];
   $arrayE2 = [];

   foreach ($arrayE as $key => $value) {
    if ($key%2 == 0) {
        $arrayE1[] = $key;
    }else {
        $arrayE2[] = $key;
    }
   }
    print_r( $arrayE2);
    print_r( $arrayE1);

          //g Pirminio masyvo elementus su poriniais indeksais padarykite 
          //lygius 0 jeigu jie didesni už 15;
   echo "G.1 <br>";
//1
  foreach ($array as $key => &$value) {
     if ($value > 15 && $key%2 == 0) {
         $value = 0;
         
     }
    }

print_r( $array);

          //h 
   echo "H.1 <br>";
$first10Array = [];
   foreach ($array as $key => $value) {
     if ($value > 10) {
         $first10Array[] = $key;
     }
    }
    
    echo "first 10 in array kay is : $first10Array[0]";
echo " <br>";
           //i
   echo "I.1 <br>";

   
   foreach ($array as $key => &$value) {
     if ($key%2 == 0) {
         unset($array[$key]);
     }
    }

    print_r( $array);



     
   


   



