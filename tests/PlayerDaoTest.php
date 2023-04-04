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

    public function testFetchedPlayersContainCorrectData()
    {
        $players = $this->playerDao->fetchAll();

        foreach ($players as $player) {
            $this->assertNotEmpty($player->getId());
            $this->assertNotEmpty($player->getName());
            $this->assertNotEmpty($player->getClubId());
            $this->assertNotEmpty($player->getPositionId());
            $this->assertNotEmpty($player->getAttack());
            $this->assertNotEmpty($player->getDefence());
        }
    }
}