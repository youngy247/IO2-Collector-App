<?php

const HOST = 'db';
const USER = 'root';
const password = 'password';
const CHARSET = 'utf8mb4';

$db = 'MatchAttax';
function connectToDb(string $db): PDO
{
    $dsn = "mysql:host=" . HOST . ";dbname=$db;charset=" . CHARSET;

    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    try {
        $pdo = new PDO($dsn, USER, password, $options);
    } catch (PDOException $exception) {
        echo '<p>There was an error connecting to the db</p>';
        exit();
    }

    return $pdo;
}

// Call connectToDb() to get a PDO object
$pdo = connectToDb($db);

// Prepare SQL query
$query = $pdo->prepare('SELECT `players`.`id`,`players`.`name`,`players`.`attack`, `players`.`defence`
                        ,`clubs`.`name` as `club_name`, `position`.`name` as `position` FROM `players` 
                          INNER JOIN `clubs` ON `players`.`club_id` = `clubs`.`id` 
                          INNER JOIN `position` ON `players`.`position_id` = `position`.`id`
                          ORDER BY `players`.`id`');

// Execute query
$query->execute();

// Now we can get the result
$result = $query->fetchAll();

echo '<pre>';
print_r($result);
echo '</pre>';