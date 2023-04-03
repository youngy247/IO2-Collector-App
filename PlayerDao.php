<?php
require_once 'pdo-connection.php';
require_once 'Player.php';
class PlayerDao
{
    private PDO $db;

    public function __construct()
    {
        $this->db = connectToDb('MatchAttax'); // Database injection
    }
    public function fetchAll(): array
    {
        $sql = 'SELECT `players`.`id`,`players`.`name`,`players`.`attack`, `players`.`defence`
                        ,`clubs`.`name` as `club_name`, `position`.`name` as `position` FROM `players`
                          INNER JOIN `clubs` ON `players`.`club_id` = `clubs`.`id`
                          INNER JOIN `position` ON `players`.`position_id` = `position`.`id`';
        $query = $this->db->prepare($sql);
        $query->execute();
        $rows = $query->fetchAll();

        $players = [];
        foreach ($rows as $row) {
            $player = new player($row['name'], $row['attack'], $row['defence'], $row['club_id'], $row['position_id'],$row['id']);
            $players[] = $player;
        }

        return $players;
    }
}
