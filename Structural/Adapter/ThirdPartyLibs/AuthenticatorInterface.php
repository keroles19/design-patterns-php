<?php

namespace Structural\Adapter\ThirdPartyLibs;

interface AuthenticatorInterface
{
   public function login(array $params);
}