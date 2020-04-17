<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use Helpers\UrlHelper;

spl_autoload_register(function($class) {
    require_once __DIR__.'\\'.$class . '.php';
});

class UrlTest extends TestCase
{

    public function testBaseUrl()
    {
        $_SERVER['REQUEST_URI'] = '/';
        $this->assertEquals('index', UrlHelper::parseUrl()['controller']);
    }

    public function testPageUrl()
    {
        $_SERVER['REQUEST_URI'] = '/test';
        $this->assertEquals('page', UrlHelper::parseUrl()['controller']);
    }

    public function testUsualUrl()
    {
        $_SERVER['REQUEST_URI'] = '/apples/create';
        $this->assertEquals('apples', UrlHelper::parseUrl()['controller']);
    }
}