<?php
use PHPUnit\Framework\TestCase;

require_once 'PlayerDao.php';

class PlayerDaoTest extends TestCase {
    private PlayerDao $playerDao;

    protected function setUp(): void
    {
        $this->playerDao = new PlayerDao();
    }
}