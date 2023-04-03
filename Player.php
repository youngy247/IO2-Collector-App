<?php

class Player
{
    private int $id;

    private string $name;
    private int $attack;
    private int $defence;

    private string $club_id;
    private string $position_id;

    public function __construct
    (
        string $name, int $attack, int $defence, string $club_id, string $position_id, int $id = -1
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->attack = $attack;
        $this->defence = $defence;
        $this->club_id = $club_id;
        $this->position_id = $position_id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAttack(): int
    {
        return $this->attack;
    }

    /**
     * @param int $attack
     */
    public function setAttack(int $attack): void
    {
        $this->attack = $attack;
    }

    /**
     * @return int
     */
    public function getDefence(): int
    {
        return $this->defence;
    }

    /**
     * @param int $defence
     */
    public function setDefence(int $defence): void
    {
        $this->defence = $defence;
    }

    /**
     * @return int
     */
    public function getClubId(): string
    {
        return $this->club_id;
    }

    /**
     * @param int $club_id
     */
    public function setClubId(string $club_id): void
    {
        $this->club_id = $club_id;
    }

    /**
     * @return int
     */
    public function getPositionId(): string
    {
        return $this->position_id;
    }

    /**
     * @param int $position_id
     */
    public function setPositionId(string $position_id): void
    {
        $this->position_id = $position_id;
    }
}