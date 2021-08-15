
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="./style/style.css">
    <title>Bebrų Užtvanka</title>

</head>
<style>

    nav {
        background: gray;
        margin: 10px;
        padding: 10px;
    }

    a {
           text-decoration: none;
           color: white; 
           margin: auto 10px;

    }

       a:hover {
           color: blue; 
    }

    input {
        margin-bottom: 10px;
    }

     .alert{
         margin: 10px;
     }
</style>

<body>
<nav>
    <a href="http://localhost/lape/09/sarasas.php?route=list">List</a>
    <a href="http://localhost/lape/09/naujaSaskaita.php">New account</a>
     <!-- <a href="http://localhost/lape/09/view/home.php">Home</a> -->
     <!-- <a href="http://localhost/lape/09/view/login.php">Login</a> -->
</nav>

<?php showMessage() ?>