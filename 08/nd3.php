<?php





echo '<a href="http://localhost/lape/08/nd3.php">pack</a>';


  if( count($_POST) != 0 ):
    $color = $_POST["color"];
echo "<body style='background-color: $color;'></body> ";
 else: 
 echo "<body style='background-color:black;'></body>";
endif 
?>

 <form action="nd3.php" method="post">
<input type="text" name="color" placeholder="Color" />
<input type="submit" name="submit" />
</form> 



