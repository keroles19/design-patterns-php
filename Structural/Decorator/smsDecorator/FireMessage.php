<?php

namespace Structural\Decorator\smsDecorator;

class FireMessage implements modifier
{
    public function sendMessage(string $msg): string
    {
        return $msg;
    }

}