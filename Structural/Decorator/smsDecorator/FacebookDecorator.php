<?php

namespace Structural\Decorator\smsDecorator;

class FacebookDecorator extends Decorator
{
    public function sendMessage(string $msg)
    {
        $sms='Facebook Service -->'. $msg;
        return parent::sendMessage($sms);
    }
}