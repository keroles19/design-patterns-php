<?php

namespace Creational\SimpleFactory\MobileOperators;

use Exception;

class NotificationFactory implements INotificationFactory
{
    private string $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    /**
     * @throws Exception
     */
    public function getCompany(): Notification
    {
        return match ($this->number) {
            "010" => new VodafoneNotification(),
            "012" => new OrangeNotification(),
            "015" => new WeNotification(),
            "default" => throw new Exception("Invalid Number"),
    };

    }


}