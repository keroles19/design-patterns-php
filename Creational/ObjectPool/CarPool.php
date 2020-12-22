<?php


namespace Creational\Pool;


class CarPool
{

    /**
     * @var Car []
     */
    private array $freeCar = [];
    /**
     * @var Car []
     */
    private array $busyCar = [];


    public function carUse(): Car
    {
        if (count($this->freeCar) == 0) {
            $car = new Car();
        } else {
            $car = array_pop($this->freeCar);
        }
        $this->busyCar[spl_object_hash($car)] = $car;

        return $car;

    }

    public function carFree(Car $car)
    {
        $carId = spl_object_hash($car);
        if (isset($this->busyCar[$carId])) {
            unset($this->busyCar[$carId]);
            $this->freeCar[$carId] = $car;
        }
    }

    public function getFreeCount(): int
    {
        return count($this->freeCar);
    }

    public function getUseCount(): int
    {
        return count($this->busyCar);
    }

}