<?php
// print_r($_POST);  
//  echo "<br>";
//  echo $_SERVER['REQUEST_METHOD'];
 if ($_SERVER['REQUEST_METHOD'] == "POST") {
     $kiek = count($_POST);
     $pTagas = "<p>$kiek</p>";
echo "<body style='background: white;'> $pTagas  </body>";
die;
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<Style>

body {
    background: black;
}


input {
    display: inline-block;
} 
 p {
         display: inline-block;
        color: gray;
 }

</Style>
<body>

<form action="" method="post">
<button type="submit">CHECK</button>

<?php 
  $array = range('A', 'Z');
    foreach(range(0 , rand(3,10)) as $key => $value) {
     echo   "<input type=\"checkbox\" name=\"$key\"> <p>$array[$value]</p>";
    }

    // <input type="checkbox" name=""> <p>a</p>
?>



</form>
    
</body>
</html>


