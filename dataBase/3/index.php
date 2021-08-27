<?php

        $host = '127.0.0.1';
        $db   = 'bank';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $pdo = new PDO($dsn, $user, $pass, $options);

        $sql = "SELECT id, `name`, lastname, personCode, aNumber, balance
        FROM accounts
        ";

        $stmt = $pdo->query($sql);
        $res;
        echo "<pre>";
        while ($row = $stmt->fetch()) {
            $res[] = $row;
        }
        
    

        $sql = "INSERT INTO accounts
        (`name`, lastname, personCode, aNumber)
        VALUES ('TEST', 'test', 123, 'lt:1111')
        ";

        // $pdo->query($sql);

        print_r ($res);
        // print_r ($res);
        // print_r ($row);

        // echo "<ul>";
        // $stmt = $pdo->query($sql);
        // while ($row = $stmt->fetch())
        // {   
        //     print_r ($row);
        //     // echo  '<li>' .$row['id'] . " " .$row['name'] . " ".$row['lastname']. " " .$row['personal_code'] . " account_number";
        // }
        // // echo "</ul>";
