<?php

namespace Structural\Composite\FormRender;

class InputElement implements Renderable
{

    public function render(): string
    {
        return '<input type="text" />';
    }
}