<?php

require_once 'PlayerDao.php';

$playerDao = new PlayerDao();

$players = $playerDao->fetchAll();
require_once 'index.html';
?>
    <body>
    <nav class="navbar">
        <ul class="links-container">
            <li><a href="#collection">Collection</a></li>
            <li><a href="#add-card-section">Add Card</a></li>

        </ul>
    </nav>
    <h1>Match Attax</h1>

    <section id="collection">
<?php

$html = '<div class="card-grid">';
foreach ($players as $player) {
    $html .= '<div class="player-card">' .
        '<img src="'.$player->getImage().'" alt="A ' . $player->getName() . '">'
        . '<p>Name: ' . $player->getName() . '</p>'
        . '<p>Attack: ' . $player->getAttack() . '</p>'
        . '<p>Defence: ' . $player->getDefence() . '</p>'
        . '<p>Club: ' . $player->getClubId() . '</p>'
        . '<p>Position: ' . $player->getPositionId() . '</p>'
        . '</div>';
}
$html .= '</div>';

echo $html;

?>
    </section>
