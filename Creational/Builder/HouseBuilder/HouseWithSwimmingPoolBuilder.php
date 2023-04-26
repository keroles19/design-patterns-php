<?php
namespace Creational\Builder\HouseBuilder;

use Creational\Builder\HouseBuilder\Types\HouseWithSwimmingPool;

class HouseWithSwimmingPoolBuilder implements HouseBuilder
{
    private HouseWithSwimmingPool $house;


    public function createHouse(): void
    {
        $this->house = new HouseWithSwimmingPool();
    }

    public function buildStepOne(): void
    {
        $this->house->setStep('one', 'concrete');
    }

    public function buildStepTwo(): void
    {
        $this->house->setStep('two', 'walls');

    }

    public function buildStepTree(): void
    {
        $this->house->setStep('two', 'swimming_pool');
    }

    public function finishHouse(): HouseWithSwimmingPool
    {
       return $this->house;
    }
}