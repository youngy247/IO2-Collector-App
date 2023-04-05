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

    public function insertPlayer(Player $player): string
    {
        // Validate the Player object
        if (!$player->getName() || !$player->getAttack() || !$player->getDefence() ||
            !$player->getClubId() || !$player->getPositionId() || !$player->getImage()) {
            throw new InvalidArgumentException('Invalid player data');
        }

        $insert = $this->db->prepare(
            'INSERT INTO 
    players (name, attack, defence, club_id, position_id, image) 
             VALUES 
    (:name, :attack, :defence, :club_name, :position_id, :image)');
        $insert->execute([
            'name' => $player->getName(),
            'attack' => $player->getAttack(),
            'defence' => $player->getDefence(),
            'club_name' => $player->getClubId(),
            'position_id' => $player->getPositionId(),
            'image' => $player->getImage(),
        ]);
        return 'Player added to your collection';
    }
}
