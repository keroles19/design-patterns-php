<?php

namespace Structural\Bridge\DrawerShape;

class CircleDrawer extends Drawer
{
    public function __construct(OperatingSystem $operatingSystem)
    {
        parent::__construct($operatingSystem);
    }

    public function draw()
    {
        return $this->operatingSystem->op() . ' circle';
    }
}