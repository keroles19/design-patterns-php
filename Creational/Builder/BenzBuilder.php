<?php


namespace Creational\Builder;


use Creational\Builder\Modules\BenzCar;
use Creational\Builder\Modules\Car;

class BenzBuilder implements CarBuilderInterface
{

    /**
     * @var Car $type
     */
    private $type;

    public function createCar()
    {
        $this->type = new BenzCar();
    }

    public function addBody()
    {
        $this->type->setPart('body', 'benz body');
    }

    public function addEngine()
    {
        $this->type->setPart('Engine', 'benz engine');
    }

    public function addWheels()
    {
        $this->type->setPart('Wheel', 'benz Wheel');
    }

    public function getCar(): Car
    {
        return $this->type;
    }
}