<?php

namespace Structural\Decorator;

class FireMessage implements modifier
{
    public function sendMessage(string $msg): string
    {
        return $msg;
    }

}