<?php

require_once 'index.html';
?>
<body>

<form action="addPlayer.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="attack">Attack:</label>
    <input type="number" name="attack" id="attack" required>

    <label for="defence">Defence:</label>
    <input type="number" name="defence" id="defence" required>

    <label for="club_name">Club:</label>
    <select id="club_name" name="club_name">
        <option value="">Select a club</option>
        <option value="Arsenal">Arsenal</option>
        <option value="Aston Villa">Aston Villa</option>
        <option value="Blackburn Rovers">Blackburn Rovers</option>
        <option value="Bolton Wanderers">Bolton Wanderers</option>
        <option value="Chelsea">Chelsea</option>
        <option value="Everton">Everton</option>
        <option value="Fulham">Fulham</option>
        <option value="Hull City">Hull City</option>
        <option value="Liverpool">Liverpool</option>
        <option value="Manchester City">Manchester City</option>
        <option value="Manchester United">Manchester United</option>
        <option value="Middlesbrough">Middlesbrough</option>
        <option value="Newcastle United">Newcastle United</option>
        <option value="Portsmouth">Portsmouth</option>
        <option value="Stoke City">Stoke City</option>
        <option value="Sunderland">Sunderland</option>
        <option value="Tottenham Hotspur">Tottenham Hotspur</option>
        <option value="West Bromwich Albion">West Bromwich Albion</option>
        <option value="West Ham United">West Ham United</option>
        <option value="Wigan Athletic">Wigan Athletic</option>
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
