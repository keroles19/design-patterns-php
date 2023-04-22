<?php

namespace Creational\AbstractFactory\NotificationSystem;
use Exception;

class EmailFactory
{

    /**
     * @throws Exception
     */
    public function sendNotification($type): Gmail
    {
         return match ($type) {
             "gmail" => new Gmail(),
             "default" => throw new Exception("Invalid Number"),
      };
  }

}