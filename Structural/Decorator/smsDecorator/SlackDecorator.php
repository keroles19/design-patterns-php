<?php

namespace Structural\Decorator\smsDecorator;

class SlackDecorator extends Decorator
{
    public function sendMessage(string $msg)
    {
        $sms='Slack Service -->'. $msg;
        return parent::sendMessage($sms);
    }
}