<?php

namespace tests;

spl_autoload_register(function($class) {
    require_once __DIR__.'\\..\\'.$class . '.php';
});

use Controllers\PageController;
use Database\DatabaseConnection;
use Models\PageModel;
use PHPUnit\Framework\TestCase;

class PageTest extends TestCase
{
    protected $dbConnection;

    public function setUp() : void
    {
        parent::setUp();
        $this->dbConnection = DatabaseConnection::createConnection();
        $stmt = $this->dbConnection->getConnection()->prepare(
            "INSERT INTO pages(friendly, title, description) VALUES ('test', 'test', 'test')"
        );

        if (!$stmt->execute()) {
            throw new \Exception("Test not set up: (" . $stmt->errno . ") " . $stmt->error);
        }
        $stmt->close;
    }

    public function testGetByFriendly()
    {
        $this->assertEquals('test', PageModel::getByFriendly('test')->friendly);
    }

    public function testController()
    {
        $this->assertNotNull((new PageController())->index(['friendly' => 'test']));
    }

    public function tearDown() : void
    {
        $stmt = $this->dbConnection->getConnection()->prepare(
            "DELETE FROM pages WHERE friendly = 'test'"
        );

        if (!$stmt->execute()) {
            throw new \Exception("Test not tear down correctly: (" . $stmt->errno . ") " . $stmt->error);
        }

        $stmt->close;
    }
}