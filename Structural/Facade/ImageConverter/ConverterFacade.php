<?php

namespace Structural\Facade\ImageConverter;

class ConverterFacade
{
    /**
     * @param Photo $photo
     * @return Photo
     */
    public function GIFConvert(Photo $photo): Photo
    {
        $animator = new Animator();
        $gifConverter = new GIFConverter($animator);
        return $gifConverter->convertToGIF($photo);
    }

    /**
     * @param Photo $photo
     * @return Photo
     */
    public function JPGConvert(Photo $photo): Photo
    {
        $colorCorrection = new ColorCorrection();
        $photo->setType($colorCorrection->correctColor($photo));
        $jpgConverter = new JPGConverter();
        return $jpgConverter->convertToJPG($photo);
    }
}