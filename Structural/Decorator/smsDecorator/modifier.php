<?php

namespace Structural\Decorator\smsDecorator;

interface modifier
{
   public function sendMessage(string $msg);
}