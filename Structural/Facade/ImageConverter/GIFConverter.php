<?php

namespace Structural\Facade\ImageConverter;

class GIFConverter
{
    /**
     * @var Animator
     */
    private Animator $animator;

    public function __construct(Animator $animator)
    {
        $this->animator = $animator;
    }

    /**
     * @param Photo $photo
     * @return Photo
     */
    public function convertToGIF(Photo $photo): Photo
    {
        $type = $photo->getType() . '-GIF';
        $photo->setType($type);
        $photo->setType($this->animator->animatePhoto($photo));
        return $photo;
    }
}