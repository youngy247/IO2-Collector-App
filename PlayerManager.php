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

    public function insertPlayer(Player $player)
    {
        // Validate the Player object
        if (!$player->getName() || !$player->getAttack() || !$player->getDefence() ||
            !$player->getClubName() || !$player->getPositionId() || !$player->getImage()) {
            throw new InvalidArgumentException('Invalid player data');
        }
        $stmt = $this->db->prepare(
            'INSERT INTO 
    players (name, attack, defence, club_name, position_id, image) 
             VALUES 
    (:name, :attack, :defence, :club_name, :position_id, :image)');
        $stmt->execute([
            'name' => $player->getName(),
            'attack' => $player->getAttack(),
            'defence' => $player->getDefence(),
            'club_name' => $player->getClubName(),
            'position_id' => $player->getPositionId(),
            'image' => $player->getImage(),
        ]);
        $player->setId($this->db->lastInsertId());
        return 'Player added to your collection';
    }
}
