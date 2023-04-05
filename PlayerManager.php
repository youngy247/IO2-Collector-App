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

    public function insert(Player $player)
    {
        // Validate the Player object
        if (!$player->getName() || !$player->getAttack() || !$player->getDefence() ||
            !$player->getClubId() || !$player->getPositionId() || !$player->getImage()) {
            throw new InvalidArgumentException('Invalid player data');
        }

}
