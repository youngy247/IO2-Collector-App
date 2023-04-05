<?php
require_once 'Player.php';

use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    public function testConstructor(): void
    {
        $player = new Player(
            'image123.png',
            'Lionel Messi',
            50,
            88,
            'Liverpool',
            'Forward');
        $this->assertEquals('Lionel Messi', $player->getName());
        $this->assertEquals(50, $player->getAttack());
        $this->assertEquals(88, $player->getDefence());
        $this->assertEquals('Liverpool', $player->getClubName());
    }

    public function testValidPosition(): void
    {
        $player = new Player(
            'image123.png',
            'Lionel Messi',
            50,
            88,
            'Liverpool',
            'Forward');
        $this->assertEquals('Forward', $player->getPositionId());

        $player->setPositionId('Defender');
        $this->assertEquals('Defender', $player->getPositionId());

        $player->setPositionId('Midfielder');
        $this->assertEquals('Midfielder', $player->getPositionId());

        $player->setPositionId('Goalkeeper');
        $this->assertEquals('Goalkeeper', $player->getPositionId());
    }

    public function testSetPositionIdWithArrayOfValidPositions()
    {
        $player = new Player(
            'image123.png',
            'Lionel Messi',
            50,
            88,
            'Liverpool',
            'Forward');

        $positions = ['Forward', 'Defender', 'Midfielder', 'Goalkeeper'];
        foreach ($positions as $position) {
            $player->setPositionId($position);
            $this->assertEquals($position, $player->getPositionId());
        }
    }

    public function testInvalidPosition(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $player = new Player(
            'image123.png',
            'Lionel Messi',
            50,
            88,
            'Liverpool',
            'InvalidPosition');
    }

    public function testSetPositionIdWithInvalidPosition()
    {
        $this->expectException(InvalidArgumentException::class);
        $player = new Player(
            'image123.png',
            'Lionel Messi',
            50,
            88,
            'Liverpool',
            'InvalidPosition');
    }

    public function testMultiplePositions(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $player = new Player(
            'image123.png',
            'Lionel Messi',
            50,
            88,
            'Liverpool',
            'Forward, Midfielder');
    }
}