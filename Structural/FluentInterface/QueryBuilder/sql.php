<?php

namespace Structural\FluentInterface\QueryBuilder;

class sql implements QueryBuilderInterface
{
    private array $fields;

    private string $table;
    private string $alias;
    private array $conditions;

    public function select(array $fields):self
    {
        $this->fields = $fields;
        return $this;
    }

    public function from(string $table, string $alias): self
    {
        $this->table = $table;
        $this->alias = $alias;

        return $this;
    }

    public function where(array $condition): self
    {
       $this->conditions = $condition;
       return $this;
    }

    public function getSql(): string
    {
        return sprintf(
            'SELECT %s FROM %s As %s WHERE %s',
            join(',', $this->fields),
            $this->table,
            $this->alias,
            join(' AND ', $this->conditions)
        );
    }
}