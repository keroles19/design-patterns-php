<?php

namespace Structural\Facade\ImageConverter;

class photo
{
    private string $type = '-web-';

    public function getType(): string
    {
        return $this->type;

    }
    /**
     * @param mixed $type
     */
    public function setType(mixed $type): void
    {
        $this->type = $type;
    }

    public function __toString()
    {
        return $this->type;
    }
}