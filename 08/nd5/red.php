<?php

$_GET['color'] ?? '';

echo '<a href="http://localhost/lape/08/nd5/red.php?pus=blue">Page red</a>';

if ($_GET['pus'] ?? '' == 'blue') {
  header('Location: http://localhost/lape/08/nd5/blue.php');
}

?>

<body style='background-color: red;'></body

        