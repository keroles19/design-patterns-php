<?php

namespace Facade;

use PHPUnit\Framework\TestCase;
use Structural\Facade\ImageConverter\ConverterFacade;
use Structural\Facade\ImageConverter\photo;

class ImageConverterTest extends TestCase
{
    private $facade;

    protected function setUp(): void
    {
        $this->facade = new ConverterFacade();
    }

    public function test_convert_to_gif()
    {
        $photo = new Photo();
        $this->facade->GIFConvert($photo);

        $this->assertEquals('-web--GIF-animate',$photo->getType());
    }

    public function test_convert_to_jpg()
    {
        $photo = new Photo();
        $this->facade->JPGConvert($photo);
        $this->assertEquals('-web-color_correction-JPG',$photo->getType());
    }
}