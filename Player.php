<?php

class Player
{
    private int $id;

    private string $name;
    private int $attack;
    private int $defence;
    private string $club_name;
    private string $position_id;
    // use '?string' to either be string or null for the optional properties when you click on the card

    private string $image;
    public function __construct
    (
        string $image, string $name, int $attack, int $defence, string $club_name, string $position_id, int $id = -1
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->attack = $attack;
        $this->defence = $defence;
        $this->club_name = $club_name;
        $this->setPositionId($position_id);
        $this->image = $image;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAttack(): int
    {
        return $this->attack;
    }

    public function setAttack(int $attack): void
    {
        $this->attack = $attack;
    }

    public function getDefence(): int
    {
        return $this->defence;
    }

    public function setDefence(int $defence): void
    {
        $this->defence = $defence;
    }

    public function getClubName(): string
    {
        return $this->club_name;
    }

    public function setClubName(string $club_name): void
    {
        $this->club_name = $club_name;
    }

    public function getPositionId(): string
    {
        return $this->position_id;
    }

    public function setPositionId(string $position_id): void
    {
        $allowedPositions = ['Goalkeeper', 'Defender', 'Midfielder', 'Forward'];
        if (!in_array($position_id, $allowedPositions)) {
            throw new InvalidArgumentException('Invalid position id');
        }
        $this->position_id = $position_id;
    }

    public function getImage(): string
    {
        return $this->image;
    }
}