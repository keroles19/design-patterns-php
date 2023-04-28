<?php

namespace Structural\Adapter\ThirdPartyLibs\BasicAuthLib\BasicAuth;

class BasicAuthenticator
{
    public function basicLogin($name, $pass): string
    {
        return $name . '-' . $pass;
    }
}