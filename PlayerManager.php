<?php

require_once 'pdo-connection.php';
require_once 'Player.php';

class PlayerManager
{
    private PDO $db;

    public function __construct()
    {
        $this->db = connectToDb('MatchAttax'); // Database injection
    }
}