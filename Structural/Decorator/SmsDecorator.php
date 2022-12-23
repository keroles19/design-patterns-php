<?php

namespace Structural\Decorator;

class SmsDecorator extends Decorator
{
    public function sendMessage(string $msg)
    {
        $sms='Sms Service -->'. $msg;
        return parent::sendMessage($sms);
    }
}