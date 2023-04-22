<?php

namespace Creational\FactoryMethod\MobileOperators;

interface INotificationFactory
{
    public function getCompany() : Notification;

}