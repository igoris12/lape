<!-- Padarykite puslapį su dviem mygtukais.
Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, nuspalvinkite foną žaliai,
Mygtukus įdėkite į dvi skairtingas formas- vieną GET ir kitą POST.
kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST.  -->
 
<!-- Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST
 metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu. -->
<?php

echo $_SERVER['REQUEST_METHOD'];
if($_SERVER['REQUEST_METHOD'] == 'GET') {
   $color = 'green';
} else {
    echo '<body style = "background-color: yellow";>';
    header ('Location: http://localhost/Lape/ND7/06/nd6.php');
    die;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sestas namu darbas</title>
</head>
<body>
  
        <form action="" method = "GET">
        <button type = "submit">Zalia</button>
        </form>
        <form action="" method = "POST">
        <button type = "submit">Geltona</button>
        </form>
</body>
</html>