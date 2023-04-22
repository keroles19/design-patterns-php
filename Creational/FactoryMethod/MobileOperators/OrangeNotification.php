<?php

namespace Creational\FactoryMethod\MobileOperators;

class OrangeNotification implements Notification
{
    public function sendMessage(): string
    {
        return 'Welcome To Orange :)';
    }

}