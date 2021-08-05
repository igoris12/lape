<?php
echo $_SERVER['REQUEST_METHOD'];
// if ($_SERVER['REQUEST_METHOD'] == "GET") {
//     // header('Location: http://localhost/lape/08/nd8/pink.php');
//     die;
// }
// http://localhost/lape/08/nd8/pink.php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pink.php</title>
</head>
<body style='background-color: pink;'>

    <form action="rose.php" method="post">
    <button type="submit">GO TO ROSE</button>
    </form>

</body>
</html>