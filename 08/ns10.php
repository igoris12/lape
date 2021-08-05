<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

     echo '<pre>';

print_r ($_POST);
print_r ($_GET); 
}

function checkbox() {
$array = range('A', 'Z');
$number = rand(3,9);
    foreach(range(0 , $number) as $key => $value) {
     echo   "<input type=\"checkbox\" name=\"$key\"> <p>$array[$value]</p>";     
    }

}

?>

<?php

 if ($_SERVER['REQUEST_METHOD'] == "POST") {
     $kiek = count($_POST);
     $kiekB = 0;
     $pTagas = "<p>$kiek buvo $kiekB</p>";
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
    checkbox();
    // <input type="checkbox" name=""> <p>a</p>
?>

</form>
</body>
</html>