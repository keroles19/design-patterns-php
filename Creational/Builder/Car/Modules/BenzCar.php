<?php


namespace Creational\Builder\Car\Modules;


class BenzCar extends Car
{

    private $data = [];

   public function setPart($name,$value)
   {
       $this->data[$name] = $value;
   }

}