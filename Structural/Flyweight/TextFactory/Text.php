<?php

namespace Structural\Flyweight\TextFactory;

interface Text
{
    public function render(string $extrinsicState): string;
}