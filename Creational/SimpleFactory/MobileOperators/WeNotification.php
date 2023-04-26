<?php

namespace Creational\SimpleFactory\MobileOperators;

class WeNotification implements Notification
{
    public function sendMessage(): string
    {
        return 'Welcome To We :)';
    }

}