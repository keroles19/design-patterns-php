<?php

namespace Structural\DataMapper\ORM;

class DataMapper
{
    public function __construct(private readonly Storage $mapper)
    {
    }

    /**
     * @param string $id
     * @return array|null
     */
    public function findById(string $id): ?array
    {
        return $this->mapper->find($id);
    }

    /**
     * @param User $user
     * @return bool
     */
    public function saveUser(User $user): bool
    {
        $data = [$user->getId() => ['email' => $user->getEmail(), 'pass' => $user->getPass()]];
        return $this->mapper->save($data);
    }

}