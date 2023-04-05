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

    <label for="club_id">Club ID:</label>
    <input type="text" name="club_id" id="club_id" required>

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
