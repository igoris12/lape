<?php



echo '<a href="http://localhost/lape/08/nd5/blue.php?pus=red">Page red</a>';
if ($_GET['pus'] ?? '' == 'red') {
    header('Location: http://localhost/lape/08/nd5/red.php');
}

?>

<body style='background-color: blue;'></body