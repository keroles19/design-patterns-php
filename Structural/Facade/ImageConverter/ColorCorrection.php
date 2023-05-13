<?php

namespace Structural\Facade\ImageConverter;

class ColorCorrection
{
    /**
     * @param Photo $photo
     * @return string
     */
    public function correctColor(Photo $photo): string
    {
        return $photo . 'color_correction';
    }
}