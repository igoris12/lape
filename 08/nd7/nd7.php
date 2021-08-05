
<?php

echo $_SERVER['REQUEST_METHOD'];
if($_SERVER['REQUEST_METHOD'] == 'GET') {
   $color = 'yellow';
} else {
    echo '<body style = "background-color: yellow";>';
    header ('Location: http://localhost/lape/08/nd7/nd7.php');
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nd6</title>
</head>
<style>
    body {
        background-color: <?= $color ?? "red" ?>;
    }
    </style>

<body>

    <form action="" method="get">
    <input type="submit" value="GET">

</form>
<form action="" method="post">
    <input type="submit" value="POST">
</form>


</body>
</html>