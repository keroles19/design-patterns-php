<?php


namespace Creational\Builder\Car;


use Creational\Builder\Car\Modules\Car;

interface CarBuilderInterface
{

    public function createCar();

    public function addBody();

    public function addEngine();

    public function addWheels();

    public function getCar(): Car;
}