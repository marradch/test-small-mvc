<?php

namespace tests;

spl_autoload_register(function($class) {
    require_once __DIR__.'\\..\\'.$class . '.php';
});

use Database\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    public function testConnection()
    {
        $this->assertNotNull(DatabaseConnection::createConnection());
    }
}