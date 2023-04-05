<?php

function returnHtmlFromArray(array $players): string {
    $html = '<div class="card-grid">';
    foreach ($players as $player) {
        $html .= '<div class="player-card">' .
            '<p class="player-name">'. $player->getName() .'</p>' .
            '<img src="'.$player->getImage().'" alt="A ' . $player->getName() .'">'
            . '<p>Card number ' . $player->getId() . '</p>'
            . '<p>Attack: ' . $player->getAttack() . '</p>'
            . '<p>Defence: ' . $player->getDefence() . '</p>'
            . '<p>Club: ' . $player->getClubId() . '</p>'
            . '<p>Position: ' . $player->getPositionId() . '</p>'
            . '</div>';
    }
    $html .= '</div>';
    return $html;
}