<?php


namespace Creational\Builder\Car;


use Creational\Builder\Car\Modules\Car;

class ProduceBuilder
{
    private $builder;

    public function __construct(CarBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function produceCar(): Car
    {
        $this->builder->createCar();
        $this->builder->addBody();
        $this->builder->addEngine();
        $this->builder->addWheels();
        return $this->builder->getCar();
    }

}