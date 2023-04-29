<?php

namespace Structural\Bridge\DrawerShape;

abstract class Drawer
{
    public function __construct(protected OperatingSystem $operatingSystem)
    {

    }

    public abstract function draw();
}