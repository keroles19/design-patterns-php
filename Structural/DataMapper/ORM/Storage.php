<?php

namespace Structural\DataMapper\ORM;

// Like DB
class Storage
{
    public function __construct(private array $data)
    {
    }

    /**
     * @param int $id
     * @return array|null
     */
    public function find(int $id): ?array
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }

        return null;
    }

    /**
     * @param array $user
     * @return bool
     */
    public function save(array $user): bool
    {
        $this->data[] = $user;
        return true;
    }
}