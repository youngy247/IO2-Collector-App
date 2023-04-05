<?php

require_once 'index.html';
?>
<body>

<form action="add_player.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="attack">Attack:</label>
    <input type="number" name="attack" id="attack" required>

    <label for="defence">Defence:</label>
    <input type="number" name="defence" id="defence" required>

    <label for="club_id">Club:</label>
    <select id="club_id" name="club_id">
        <option value="">Select a club</option>
        <option value="ARS">Arsenal</option>
        <option value="AVL">Aston Villa</option>
        <option value="BLA">Blackburn Rovers</option>
        <option value="BOL">Bolton Wanderers</option>
        <option value="CHE">Chelsea</option>
        <option value="EVE">Everton</option>
        <option value="FUL">Fulham</option>
        <option value="HUL">Hull City</option>
        <option value="LIV">Liverpool</option>
        <option value="MCI">Manchester City</option>
        <option value="MUN">Manchester United</option>
        <option value="MID">Middlesbrough</option>
        <option value="NEW">Newcastle United</option>
        <option value="POR">Portsmouth</option>
        <option value="STK">Stoke City</option>
        <option value="SUN">Sunderland</option>
        <option value="TOT">Tottenham Hotspur</option>
        <option value="WBA">West Bromwich Albion</option>
        <option value="WHU">West Ham United</option>
        <option value="WIG">Wigan Athletic</option>
    </select>

    <label for="position_id">Position:</label>
    <select name="position_id" id="position_id" required>
        <option value="">Choose position</option>
        <option value="Goalkeeper">Goalkeeper</option>
        <option value="Defender">Defender</option>
        <option value="Midfielder">Midfielder</option>
        <option value="Forward">Forward</option>
    </select>

    <label for="image">Image URL:</label>
    <input type="text" name="image" id="image" required>

    <button type="submit">Add player</button>
</form>

</body>
