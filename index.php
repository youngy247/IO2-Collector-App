<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'PlayerDao.php';

$playerDao = new PlayerDao();

$players = $playerDao->fetchAll();
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Match Attax</title>

        <meta name="description" content="Match Attax Collection">
        <meta name="author" content="Adam Young">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/styles.css">

        <link rel="icon" href="images/favicon.png" sizes="192x192">
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/favicon.png">

        <!-- <script defer src="js/index.js"></script> -->
    </head>

    <body>

    <h1>Match Attax</h1>

    <section class="collection">
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



$html = '';
foreach ($players as $player) {
    $html .= '<div class="player-card">'
        . '<p>Name: ' . $player->getName() . '</p>'
        . '<p>Attack: ' . $player->getAttack() . '</p>'
        . '<p>Defence: ' . $player->getDefence() . '</p>'
        . '<p>Club: ' . $player->getClubId() . '</p>'
        . '<p>Position: ' . $player->getPositionId() . '</p>'
        . '</div>';
}
echo $html;
?>