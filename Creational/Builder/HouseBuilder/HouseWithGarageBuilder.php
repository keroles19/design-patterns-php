<?php
namespace Creational\Builder\HouseBuilder;

use Creational\Builder\HouseBuilder\Types\HouseWithGarage;

class HouseWithGarageBuilder implements HouseBuilder
{
    private HouseWithGarage $house;


    public function createHouse(): void
    {
        $this->house = new HouseWithGarage();
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
        $this->house->setStep('two', 'garage');
    }

    public function finishHouse(): HouseWithGarage
    {
       return $this->house;
    }
}