<?php

namespace Creational\AbstractFactory\ShopSimulator;

use phpDocumentor\Reflection\Utils;

class VictorianChair implements Chair
{
    public function create(): string
    {
        return 'Victorian Chair';
    }
}