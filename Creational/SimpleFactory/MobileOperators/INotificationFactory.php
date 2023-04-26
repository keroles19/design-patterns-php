<?php

namespace Creational\SimpleFactory\MobileOperators;

interface INotificationFactory
{
    public function getCompany() : Notification;

}