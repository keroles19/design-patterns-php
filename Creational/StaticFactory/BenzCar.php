<?php


namespace Creational\StaticFactory;


class BenzCar implements CarInterFace
{

    public function model() : string
    {
        return "Bmw";
    }
}