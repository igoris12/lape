<?php




echo '<a href="http://localhost/lape/08/nd2.php">pack</a>';

  if( count($_GET) != 0 ):
      $color = $_GET['color'];
echo "<body style='background-color: $color;'></body> ";
 else: 
 echo "<body style='background-color:black;'></body>";
endif 
?>