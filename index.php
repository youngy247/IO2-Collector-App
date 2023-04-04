<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once 'PlayerDao.php';

$playerDao = new PlayerDao();

$players = $playerDao->fetchAll();
?>

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
foreach ($pigs as $pig) {
    $html .= '<div class="pig-card">'
        . '<p>Name: ' . $pig->getName() . '</p>'
        . '<p>Weight: ' . $pig->getWeight() . '</p>'
        . '<p>Colour: ' . $pig->getColour() . '</p>'
        . '</div>';
}
echo $html;
?>