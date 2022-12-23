<?php

namespace Structural\Decorator;

class Decorator implements modifier
{
    public modifier $modifier;
    public function __construct(modifier $modifier)
    {
       $this->modifier = $modifier;
    }

    public function sendMessage(string $msg)
    {
        return $this->modifier->sendMessage($msg);
    }

}