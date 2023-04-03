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

$query = $pdo->prepare('SELECT `players`.`name`, `players`.`id`, `players`.`dob`, `players`.`country`, `clubs`.`name` as `club_name` FROM `players` LEFT JOIN `clubs` ON `players`.`club_id` = `clubs`.`id`');


// 3. Execute query

$query->execute();

//Now we can get the result

$result = $query->fetchAll();

echo '<pre>';
print_r($result);
echo '</pre>';