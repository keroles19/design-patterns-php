<?php

namespace Structural\Facade\OperatingSystem;

interface OperatingSystem
{
    public function halt();

    public function getName(): string;
}