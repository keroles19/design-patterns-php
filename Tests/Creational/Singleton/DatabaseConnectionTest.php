<?php

namespace Creational\Singleton;

use Creational\Singleton\DbConnection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DatabaseConnectionTest extends TestCase
{
    public function test_database_connection_singleton_pattern(): void
    {
        $connection1 = DatabaseConnection::getInstance();
        $connection2 = DatabaseConnection::getInstance();

        // Assert that both connections are the same instance
        $this->assertSame($connection1, $connection2);

        $this->assertEquals('new connection', $connection1->getConnection());
    }
}