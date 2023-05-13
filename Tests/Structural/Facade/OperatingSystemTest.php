<?php

namespace Facade;

use PHPUnit\Framework\TestCase;
use Structural\Facade\OperatingSystem\Bios;
use Structural\Facade\OperatingSystem\Facade;
use Structural\Facade\OperatingSystem\OperatingSystem;

class OperatingSystemTest extends TestCase
{
    public function testComputerOn()
    {
        $os = $this->createMock(OperatingSystem::class);

        $os->method('getName')
            ->will($this->returnValue('Linux'));

        $bios = $this->createMock(Bios::class);

        $bios->method('launch')
            ->with($os);


        $facade = new Facade($bios, $os);
        $facade->turnOn();

        $this->assertSame('Linux', $os->getName());
    }
}