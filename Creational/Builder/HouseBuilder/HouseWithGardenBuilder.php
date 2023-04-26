<?php
namespace Creational\Builder\HouseBuilder;

use Creational\Builder\HouseBuilder\Types\HouseWithGarden;

class HouseWithGardenBuilder implements HouseBuilder
{
    private HouseWithGarden $house;


    public function createHouse(): void
    {
        $this->house = new HouseWithGarden();
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
        $this->house->setStep('two', 'garden');
    }

    public function finishHouse(): HouseWithGarden
    {
       return $this->house;
    }
}