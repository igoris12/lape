<?php

?>

<a href="http://localhost/lape/08/nd1.php?color=1">front</a>
<a href="http://localhost/lape/08/nd1.php">pack</a>

<?php  if(1 == ($_GET['color'] ?? '')): ?> 
<body style='background-color: red;'></body>
<?php else:  ?>
<body style='background-color: black;'></body>
<?php endif ?>
