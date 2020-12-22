<?php


namespace Creational\Pool;


class Car
{
    private \DateTime $rentAt;

    public function __construct()
    {
        $this->rentAt = new \DateTime();
    }


    public function move(): string
    {
        return "this car is moving";
    }

}