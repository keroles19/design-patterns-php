<?php


namespace Creational\StaticFactory\Car;


class BmwCar implements CarInterFace
{

    public function model() : string
    {
        return "Bmw";
    }
}