<?php

// 1. Connect to database and save in a variable
$host = 'db';
$db = 'MatchAttax';
$user = 'root';
$password = 'password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (\PDOException $exception) {
    echo '<p>There was an error connecting to the db</p>';
    exit();
}


// 2. Prepare Statement

$query = $pdo->prepare('SELECT `players`.`id`,`players`.`name`,`players`.`attack`, `players`.`defence`
                        ,`clubs`.`name` as `club_name`, `position`.`name` as `position` FROM `players`
                          INNER JOIN `clubs` ON `players`.`club_id` = `clubs`.`id`
                          INNER JOIN `position` ON `players`.`position_id` = `position`.`id`');


// 3. Execute query

$query->execute();

//Now we can get the result

$result = $query->fetchAll();

echo '<pre>';
print_r($result);
echo '</pre>';