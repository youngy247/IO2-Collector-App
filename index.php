<?php
require_once(__DIR__ . '/vendor/autoload.php');
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
use Cloudinary\Cloudinary;
use Cloudinary\Transformation\Resize;

$cloudinary = new Cloudinary(
    [
        'cloud' => [
            'cloud_name' => 'dhi7djro1',
            'api_key'    => '611442853131594',
            'api_secret' => 'IDAzt6eqFCUfUWh3V1XDMhd7Gug',
        ],
    ]
);

$cloudinary->uploadApi()->upload(
    'https://upload.wikimedia.org/wikipedia/commons/a/ae/Olympic_flag.jpg',
    ['public_id' => 'olympic_flag']
);

$cloudinary->image('olympic_flag')->resize(Resize::fill(100, 150))->toUrl();



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

    <section id="add-card-section">

    </section>
