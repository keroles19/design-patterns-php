<?php

namespace Structural\Flyweight\TextFactory;

class Word implements Text
{
    public function __construct(private readonly string $name)
    {
    }

    public function render(string $extrinsicState): string
    {
        return sprintf('Word %s with font %s', $this->name, $extrinsicState);
    }
}