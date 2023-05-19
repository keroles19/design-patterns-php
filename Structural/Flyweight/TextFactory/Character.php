<?php

namespace Structural\Flyweight\TextFactory;

class Character implements Text
{
    public function __construct(private readonly string $name)
    {
    }

    public function render(string $extrinsicState): string
    {
        // Clients supply the context-dependent information that the flyweight needs to draw itself
        // For flyweights representing characters, extrinsic state usually contains e.g. the font.

        return sprintf('Character %s with font %s', $this->name, $extrinsicState);
    }
}