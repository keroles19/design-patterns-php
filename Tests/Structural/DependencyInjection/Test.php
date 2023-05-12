<?php

namespace DependencyInjection;

use PHPUnit\Framework\TestCase;
use Structural\DependencyInjection\DatabaseConfiguration;
use Structural\DependencyInjection\DatabaseConnection;

class DependencyInjectionTest extends TestCase
{
    public function test_dependency_injection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'keroles', '1234');
        $connection = new DatabaseConnection($config);

        $this->assertSame('keroles:1234@localhost:3306', $connection->getDsn());
    }
}
