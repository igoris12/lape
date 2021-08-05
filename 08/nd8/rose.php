<?php
echo $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    header('Location: http://localhost/lape/08/nd8/pink.php');
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rose.php</title>
</head>
<body style='background-color: rgb(163, 62, 62);'>
    
</body>
</html>
