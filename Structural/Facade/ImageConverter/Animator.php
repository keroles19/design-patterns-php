<?php

namespace Structural\Facade\ImageConverter;

class Animator
{
    /**
     * @param Photo $photo
     * @return string
     */
    public function animatePhoto(Photo $photo): string
    {
        return $photo . '-animate';
    }

}