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
            <li><a href="form.php">Add Card</a></li>

        </ul>
    </nav>
    <h1>Match Attax</h1>
    <hr class="divider" />

    <section id="collection">
        <h2>Your Collection:</h2>
<?php



echo returnHtmlFromArray($players);

?>
    </section>
    </body>
</html>
