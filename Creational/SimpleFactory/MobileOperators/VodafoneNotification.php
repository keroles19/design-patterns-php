<?php

namespace Creational\SimpleFactory\MobileOperators;

class VodafoneNotification implements Notification
{
    public function sendMessage(): string
    {
        return 'Welcome To Vodafone :)';
    }

}