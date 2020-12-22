<?php


namespace Creational\StaticFactory;


class StaticFactory
{
    /**
     * @param string $type
     * @return BenzCar|BmwCar|null
     */
    public static function factory(string  $type){
        if($type == "Bmw")
            return new BmwCar();
        if($type == "Benz")
            return  new BenzCar();
        return  null;
    }

}