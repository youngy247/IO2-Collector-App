<?php
use PHPUnit\Framework\TestCase;

require_once 'PlayerDao.php';

class PlayerDaoTest extends TestCase {
    private PlayerDao $playerDao;

    protected function setUp(): void
    {
        $this->playerDao = new PlayerDao();
    }

    public function testFetchAllReturnsArrayOfPlayers()
    {
        $players = $this->playerDao->fetchAll();

        $this->assertIsArray($players);

        foreach ($players as $player) {
            $this->assertInstanceOf(Player::class, $player);
        }
    }
}