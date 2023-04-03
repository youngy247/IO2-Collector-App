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

    public function testGetId()
    {
        $player = new Player('John Doe', 80, 70, '1234', 'Defender', 1);
        $this->assertEquals(1, $player->getId());
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

    public function testInvalidPosition(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Player('Lionel Messi', 99, 50, 'FC Barcelona', 'InvalidPosition');
    }

    public function testMultiplePositions(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Player('Lionel Messi', 99, 50, 'FC Barcelona', 'Forward, Midfielder');
    }
}