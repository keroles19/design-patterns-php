<?php


namespace Creational\StaticFactory;


class BmwCar implements CarInterFace
{

    public function model() : string
    {
        return "Bmw";
    }
}