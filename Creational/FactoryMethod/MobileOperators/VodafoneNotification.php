<?php

namespace Creational\FactoryMethod\MobileOperators;

class VodafoneNotification implements Notification
{
    public function sendMessage(): string
    {
        return 'Welcome To Vodafone :)';
    }

}