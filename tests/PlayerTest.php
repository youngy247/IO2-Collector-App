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
        $this->assertEquals('FC Barcelona', $player->getClubName());
    }

    public function testGetId()
    {
        $player = new Player('John Doe', 80, 70, '1234', 'Defender', 1);
        $this->assertEquals(1, $player->getId());
    }

    public function testGetName()
    {
        $player = new Player('John Doe', 80, 70, '1234', 'Defender');
        $this->assertEquals('John Doe', $player->getName());
    }

    public function testSetName()
    {
        $player = new Player('John Doe', 80, 70, '1234', 'Defender');
        $player->setName('Jane Doe');
        $this->assertEquals('Jane Doe', $player->getName());
    }

    public function testGetAttack()
    {
        $player = new Player('John Doe', 80, 70, '1234', 'Defender');
        $this->assertEquals(80, $player->getAttack());
    }

    public function testSetAttack()
    {
        $player = new Player('John Doe', 80, 70, '1234', 'Defender');
        $player->setAttack(90);
        $this->assertEquals(90, $player->getAttack());
    }

    public function testGetDefence()
    {
        $player = new Player('John Doe', 80, 70, '1234', 'Defender');
        $this->assertEquals(70, $player->getDefence());
    }

    public function testSetDefence()
    {
        $player = new Player('John Doe', 80, 70, '1234', 'Defender');
        $player->setDefence(60);
        $this->assertEquals(60, $player->getDefence());
    }

    public function testGetClubId()
    {
        $player = new Player('John Doe', 80, 70, '1234', 'Defender');
        $this->assertEquals('1234', $player->getClubName());
    }

    public function testSetClubId()
    {
        $player = new Player('John Doe', 80, 70, '1234', 'Defender');
        $player->setClubName('5678');
        $this->assertEquals('5678', $player->getClubName());
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

    public function testSetPositionIdWithArrayOfValidPositions()
    {
        $player = new Player('Lionel Messi', 99, 50, 'FC Barcelona', 'Forward');

        $positions = ['Forward', 'Defender', 'Midfielder', 'Goalkeeper'];
        foreach ($positions as $position) {
            $player->setPositionId($position);
            $this->assertEquals($position, $player->getPositionId());
        }
    }

    public function testInvalidPosition(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Player('Lionel Messi', 99, 50, 'FC Barcelona', 'InvalidPosition');
    }

    public function testSetPositionIdWithInvalidPosition()
    {
        $player = new Player('Lionel Messi', 99, 50, 'FC Barcelona', 'Forward');

        $this->expectException(InvalidArgumentException::class);
        $player->setPositionId('InvalidPosition');
    }

    public function testMultiplePositions(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Player('Lionel Messi', 99, 50, 'FC Barcelona', 'Forward, Midfielder');
    }
}