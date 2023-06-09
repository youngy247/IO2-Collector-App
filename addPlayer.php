<?php
require_once 'Player.php';
require_once 'pdo-connection.php';
require_once 'PlayerManager.php';

// Retrieve the form data
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $attack = $_POST['attack'];
    $defence = $_POST['defence'];
    $club_id = $_POST['club_id'];
    $position_id = $_POST['position_id'];
    $image = $_POST['image'];
}


// Create a new Player object with the form data
$player = new Player($image, $name, $attack, $defence, $club_id, $position_id);

// Insert the new player into the database
$db = new PlayerManager();
$db->insertPlayer($player);

// Redirect the user to the collection page
header('Location: index.php');
