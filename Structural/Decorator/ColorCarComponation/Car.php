<?php

namespace Structural\Decorator\ColorCarComponation;

class Car
{
    private string $color = '';

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color .= $color;
    }

}