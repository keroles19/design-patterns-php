<?php

namespace Structural\Facade\ImageConverter;

class JPGConverter
{
    public function convertToJPG(Photo $photo): Photo
    {
        $photo->setType($photo . '-JPG');
        return $photo;
    }
}