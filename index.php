<?php

require_once 'PlayerDao.php';
require_once 'functions.php';

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



echo returnHtmlFromArray($players);

?>
    </section>
