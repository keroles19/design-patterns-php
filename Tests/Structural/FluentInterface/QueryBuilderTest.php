<?php

namespace FluentInterface;

use PHPUnit\Framework\TestCase;
use Structural\FluentInterface\QueryBuilder\sql;

class QueryBuilderTest extends TestCase
{
    public function test_can_get_sql_from_builder_query(){
        $sql =  new sql();

        $sql->select(['name', 'email'])
            ->from('user', 'us')
            ->where(['id = 30','name = keroles'])
            ->getSql();

        $this->assertEquals('SELECT name,email FROM user As us WHERE id = 30 AND name = keroles',
            $sql->getSQL());

    }
}