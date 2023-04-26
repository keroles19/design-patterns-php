<?php

namespace Creational\Builder\HouseBuilder;

class BuildHouse
{
    public function __construct(protected HouseBuilder $builder)
    {
    }


    public function produceHouse()
    {
        $this->builder->createHouse();
        $this->builder->buildStepOne();
        $this->builder->buildStepTwo();
        $this->builder->buildStepTree();

        return $this->builder->finishHouse();
    }
}