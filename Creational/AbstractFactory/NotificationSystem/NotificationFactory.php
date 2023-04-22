<?php

namespace Creational\AbstractFactory\NotificationSystem;

use Exception;

class NotificationFactory
{
    /**
     * @throws Exception
     */
    public function sendNotification($type): EmailFactory|SmsFactory
    {
        return match ($type) {
            "sms" => new SmsFactory(),
            "email" => new EmailFactory(),
            "default" => throw new Exception("Invalid Number"),
        };
    }

}