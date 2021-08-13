<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

    div {
        display: block;
        margin: 10px ;
        padding: 15px;
        border: 2px solid black;
    }



    button {
       display: inline-block;
       border: 1px solid gray;
    }

     span {
         display: inline-block;
        border: 1px solid gray;
         margin: 5px 0 10px;
         padding: 5px;
     }

      p {
         display: inline-block;
        border: 1px solid gray;
        margin: 5px 0  10px;
        padding: 5px;
         
     }

     .alert{
         margin: 10px;
     }

    
</style>

<body>
<nav>
    <a href="http://localhost/lape/09/sarasas.php?route=list">List</a>
    <a href="http://localhost/lape/09/naujaSaskaita.php">New account</a>
</nav>

<?php showMessage() ?>