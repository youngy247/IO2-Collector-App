<?php

class player
{
    private int $id;
    private string $name;
    private int $attack;
    private int $defence;

    private int $club_id;
    private int $position_id;

    public function __construct
    (
        string $name, int $attack, int $defence, int $club_id, int $position_id, int $id = -1
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->attack = $attack;
        $this->defence = $defence;
        $this->club_id = $club_id;
        $this->position_id = $position_id;
    }
}