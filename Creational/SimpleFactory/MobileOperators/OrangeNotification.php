<?php

namespace Creational\SimpleFactory\MobileOperators;

class OrangeNotification implements Notification
{
    public function sendMessage(): string
    {
        return 'Welcome To Orange :)';
    }

}