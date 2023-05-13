<?php

namespace Structural\Facade\OperatingSystem;

class Facade
{
    public function __construct(private readonly Bios $bios, private readonly OperatingSystem $os)
    {
    }

    public function turnOn(): void
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    public function turnOff(): void
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}