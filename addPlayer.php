<?php
require_once 'Player.php';
require_once 'pdo-connection.php';

// Retrieve the form data
$name = $_POST['name'];
$attack = $_POST['attack'];
$defence = $_POST['defence'];
$club_id = $_POST['club_id'];
$position_id = $_POST['position_id'];
$image = $_POST['image'];