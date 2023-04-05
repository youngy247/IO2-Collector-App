<?php

require_once 'index.html';
?>
<body>
<nav class="navbar">
    <ul class="links-container">
        <li><a href="index.php">Collection</a></li>
        <li><a href="form.php">Add Card</a></li>

    </ul>
</nav>
<h1 class="form-header">Add A Player</h1>
<hr class="divider" />
<section>

<form action="addPlayer.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="attack">Attack:</label>
    <input type="number" name="attack" id="attack" required>

    <label for="defence">Defence:</label>
    <input type="number" name="defence" id="defence" required>

    <label for="club_id">Club:</label>
    <select id="club_id" name="club_id">
        <option value="">Select a club</option>
        <option value="1">Arsenal</option>
        <option value="2">Aston Villa</option>
        <option value="3">Blackburn Rovers</option>
        <option value="4">Bolton Wanderers</option>
        <option value="5">Chelsea</option>
        <option value="6">Everton</option>
        <option value="7">Fulham</option>
        <option value="8">Hull City</option>
        <option value="9">Liverpool</option>
        <option value="10">Manchester City</option>
        <option value="11">Manchester United</option>
        <option value="12">Middlesbrough</option>
        <option value="13">Newcastle United</option>
        <option value="14">Portsmouth</option>
        <option value="15">Stoke City</option>
        <option value="16">Sunderland</option>
        <option value="17">Tottenham Hotspur</option>
        <option value="18">West Bromwich Albion</option>
        <option value="19">West Ham United</option>
        <option value="20">Wigan Athletic</option>
    </select>

    <label for="position_id">Position:</label>
    <select name="position_id" id="position_id" required>
        <option value="">Choose position</option>
        <option value="1">Goalkeeper</option>
        <option value="2">Defender</option>
        <option value="3">Midfielder</option>
        <option value="4">Forward</option>
    </select>

    <label for="image">Image URL:</label>
    <input type="text" name="image" id="image" required>

    <button type="submit">Add player</button>
</form>
</section>

</body>
