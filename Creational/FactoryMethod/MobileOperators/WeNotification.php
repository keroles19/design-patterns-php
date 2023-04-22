<?php

namespace Creational\FactoryMethod\MobileOperators;

class WeNotification implements Notification
{
    public function sendMessage(): string
    {
        return 'Welcome To We :)';
    }

}