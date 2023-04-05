<?php
use PHPUnit\Framework\TestCase;
require_once 'Player.php';
require_once 'functions.php';

class functionsTest extends TestCase
{
    public function testReturnHtmlFromArrayWithOnePlayer()
    {
        $players = [
            new Player('image1.jpg', 'Player 1', 80, 70, 'club1', 'Defender')
        ];
        $expectedHtml = '<div class="card-grid">' .
            '<div class="player-card">' .
            '<p class="player-name">Player 1</p>' .
            '<img src="image1.jpg" alt="Player 1">' .
            '<p>Card number 1</p>'.
            '<p>Attack: 80</p>' .
            '<p>Defence: 70</p>' .
            '<p>Club: club1</p>' .
            '<p>Position: Defender</p>' .
            '</div>' .
            '</div>';

        $this->assertEquals($expectedHtml, returnHtmlFromArray($players));
    }

    public function testReturnHtmlFromArray()
    {
        $players = [
            new Player('image1.jpg', 'Player 1', 80, 70, 'club1', 'Defender'),
            new Player('image2.jpg', 'Player 2', 90, 80, 'club2', 'Midfielder'),
            new Player('image3.jpg', 'Player 3', 95, 85, 'club3', 'Forward')
        ];
        $expectedHtml =
            '<div class="card-grid">' .
            '<div class="player-card">' .
            '<p class="player-name">Player 1</p>' .
            '<img src="image1.jpg" alt="Player 1">' .
            '<p>Card number 1</p>'.
            '<p>Attack: 80</p>' .
            '<p>Defence: 70</p>' .
            '<p>Club: club1</p>' .
            '<p>Position: Defender</p>' .
            '</div>' .
            '<div class="player-card">' .
            '<p class="player-name">Player 2</p>' .
            '<img src="image2.jpg" alt="Player 2">' .
            '<p>Card number 2</p>'.
            '<p>Attack: 90</p>' .
            '<p>Defence: 80</p>' .
            '<p>Club: club2</p>' .
            '<p>Position: Midfielder</p>' .
            '</div>' .
            '<div class="player-card">' .
            '<p class="player-name">Player 3</p>' .
            '<img src="image3.jpg" alt="Player 3">' .
            '<p>Card number 3</p>'.
            '<p>Attack: 95</p>' .
            '<p>Defence: 85</p>' .
            '<p>Club: club3</p>' .
            '<p>Position: Forward</p>' .
            '</div>' .
            '</div>';

        $this->assertEquals($expectedHtml, returnHtmlFromArray($players));
    }

    public function testReturnHtmlFromArrayWithNoPlayers()
    {
        $players = [];
        $expectedHtml = '<div class="card-grid"></div>';

        $this->assertEquals($expectedHtml, returnHtmlFromArray($players));
    }
}
