<?php


namespace Creational\Builder;


use Creational\Builder\Modules\Car;

interface CarBuilderInterface
{

    public function createCar();

    public function addBody();

    public function addEngine();

    public function addWheels();

    public function getCar(): Car;
}