<?php

namespace Creational\AbstractFactory\ShopSimulator;

use phpDocumentor\Reflection\Utils;

class ModernChair implements Chair
{
    public function create(): string
    {
        return 'Modern Chair';
    }
}