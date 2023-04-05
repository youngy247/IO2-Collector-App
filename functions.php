<?php

function returnHtmlFromArray(array $players): string {
    $html = '<div class="card-grid">';
    foreach ($players as $player) {
        $html .= '<div class="player-card">' .
            '<p>'. $player->getName() .'</p>' .
            '<img src="'.$player->getImage().'" alt="A ' . $player->getName() .'">'
//            . '<p>Name: ' . $player->getName() . '</p>'
            . '<p>Attack: ' . $player->getAttack() . '</p>'
            . '<p>Defence: ' . $player->getDefence() . '</p>'
            . '<p>Club: ' . $player->getClubId() . '</p>'
            . '<p>Position: ' . $player->getPositionId() . '</p>'
            . '</div>';
    }
    $html .= '</div>';
    return $html;
}