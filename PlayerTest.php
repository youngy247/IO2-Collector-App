<?php
require_once 'Player.php';
use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    public function testConstructor(): void
    {
        $player = new Player('Lionel Messi', 99, 50, 'FC Barcelona', 'Forward');
        $this->assertEquals('Lionel Messi', $player->getName());
        $this->assertEquals(99, $player->getAttack());
        $this->assertEquals(50, $player->getDefence());
        $this->assertEquals('FC Barcelona', $player->getClubId());
    }

    public function testValidPosition(): void
    {
        $player = new Player('Lionel Messi', 99, 50, 'FC Barcelona', 'Forward');
        $this->assertEquals('Forward', $player->getPositionId());

        $player->setPositionId('Defender');
        $this->assertEquals('Defender', $player->getPositionId());

        $player->setPositionId('Midfielder');
        $this->assertEquals('Midfielder', $player->getPositionId());

        $player->setPositionId('Goalkeeper');
        $this->assertEquals('Goalkeeper', $player->getPositionId());
    }
}