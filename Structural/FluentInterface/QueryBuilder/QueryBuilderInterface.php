<?php

namespace Structural\FluentInterface\QueryBuilder;

interface QueryBuilderInterface
{
    public function select(array $fields);

    public function from(string $table, string $alias);

    public function where(array $condition);
}