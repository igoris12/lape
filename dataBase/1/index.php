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

//  SELECT column_name(s) FROM table_name

$sql = "SELECT id, `name`, height, `type`
FROM test
-- WHERE `type` = 3  OR `type` = 2
-- WHERE height > 33
-- WHERE id <> 2
-- WHERE id != 2
ORDER BY height

";

echo "<ul>";
$stmt = $pdo->query($sql);
while ($row = $stmt->fetch())
{   
    echo  '<li>' .$row['id'] . " " .$row['name'] . " ".$row['height']. " m " .$row['type'] . " type";
}
echo "</ul>";

//WRITE

// INSERT INTO table_name (column1, column2, column3,...)
// VALUES (value1, value2, value3,...)

$sql = "INSERT INTO test
(`name`, height,`type`)
VALUES ('TEST', 33.33, 1)
";

$pdo->query($sql);

//delete 

// DELETE FROM table_name
// WHERE some_column = some_value

$sql = "DELETE FROM test
WHERE `name` = 'TEST'
";

$pdo->query($sql);


// UPDATE table_name
// SET column1=value, column2=value2,...
// WHERE some_column=some_value 


// $sql = "UPDATE test
// SET `name`='UPDATE'
// WHERE `name`= 'TEST'
// ";

$pdo->query($sql);