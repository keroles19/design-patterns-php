<?php


namespace Creational\Builder;


use Creational\Builder\Modules\BmwCar;
use Creational\Builder\Modules\Car;

class BmwBuilder implements CarBuilderInterface
{

    /**
     * @var Car $type
     */
    private $type;

    public function createCar()
    {
        $this->type = new BmwCar();
    }

    public function addBody()
    {
        $this->type->setPart('body', 'Bmw body');
    }

    public function addEngine()
    {
        $this->type->setPart('Engine', 'Bmw engine');
    }

    public function addWheels()
    {
        $this->type->setPart('Wheel', 'Bmw Wheel');
    }

    public function getCar(): Car
    {
        return $this->type;
    }
}