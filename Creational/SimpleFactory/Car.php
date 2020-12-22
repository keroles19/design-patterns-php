<?php


namespace Creational\SimpleFactory;


class Car
{
    private string $type;

    public function __construct(string $type)
    {

        $this->type = $type;
    }

}