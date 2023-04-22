<?php

namespace Creational\AbstractFactory\NotificationSystem;
use Exception;

class SmsFactory
{

    /**
     * @throws Exception
     */
    public function sendNotification($number): Vodafone
    {
         return match ($number) {
             "010" => new Vodafone(),
             "default" => throw new Exception("Invalid Number"),
      };
  }

}