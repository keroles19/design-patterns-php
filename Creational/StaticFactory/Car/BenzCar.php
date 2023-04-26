<?php


namespace Creational\StaticFactory\Car;


class BenzCar implements CarInterFace
{

    public function model() : string
    {
        return "Bmw";
    }
}