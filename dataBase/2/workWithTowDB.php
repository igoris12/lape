<?php
$host = '127.0.0.1';
$db   = 'test2';
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

 
 //  SELECT column_name(s)
 // FROM table1
 // INNER JOIN table2
 // ON table1.column_name = table2.column_name;
 
 // INNER
// $sql = "SELECT *
// FROM authors
// INNER JOIN books
// ON authors.id = books.author_id
// ";


// echo "<ul>";
// $stmt = $pdo->query($sql);
// while ($row = $stmt->fetch())
// {   
//     echo  '<li>'.'ID: '.$row['id'] . " " .$row['name'] . " ".$row['surname']. "  " .$row['title'] . ".";
// }
// echo "</ul>";

//LEFT
// $sql = "SELECT `name`, surname , title , authors.id AS aid , books.id AS bid
// FROM authors
// LEFT JOIN books
// ON authors.id = books.author_id
// WHERE books.author_id > 1
// ORDER BY authors.id
// ";


// echo "<ul>";
// $stmt = $pdo->query($sql);
// while ($row = $stmt->fetch())
// {   
//     echo  '<li>'.'ID: '.$row['aid'] . " " .$row['name'] . " ".$row['surname']. "  " .$row['title'] . ".";
// }
// echo "</ul>";


//RIGHT
// $sql = "SELECT `name`, surname , title , authors.id AS aid , books.id AS bid
// FROM authors
// RIGHT JOIN books
// ON authors.id = books.author_id
// ";


// echo "<ul>";
// $stmt = $pdo->query($sql);
// while ($row = $stmt->fetch())
// {   
//     echo  '<li>'.'ID: '.$row['aid'] . " " .$row['name'] . " ".$row['surname']. "  " .$row['title'] . ".";
// }
// echo "</ul>";


// many to many 

// SELECT customerName, customercity, customermail, salestotal
// FROM onlinecustomers AS oc
//    INNER JOIN
//    orders AS o
//    ON oc.customerid = o.customerid
//    INNER JOIN
//    sales AS s
//    ON o.orderId = s.orderId


$sql = "SELECT `name`, surname , title , a.id AS aid , b.id AS bid
FROM authors 
AS a
INNER JOIN authors_books
AS ab
ON a.id = ab.author_id
INNER JOIN books
AS b
ON b.id = ab.book_id
";


echo "<ul>";
$stmt = $pdo->query($sql);
while ($row = $stmt->fetch())
{   
    echo  '<li>'.'ID: '.$row['aid'] . " " .$row['name'] . " ".$row['surname']. "  " .'ID: '.$row['bid'] . "  "  .$row['title'] . ".";
}
echo "</ul>";


$sql = "INSERT INTO authors
(`name`, surname)
VALUES ('TEST', 'pizdukas')
";

$pdo->query($sql);

$lastId =$pdo->lastInsertId();


$sql = "INSERT INTO authors_books
(`author_id`, book_id)
VALUES ('$lastId', '1')
";

$pdo->query($sql);
