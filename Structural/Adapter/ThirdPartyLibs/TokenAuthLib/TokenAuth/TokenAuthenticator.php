<?php

namespace Structural\Adapter\ThirdPartyLibs\TokenAuthLib\TokenAuth;

class TokenAuthenticator
{
    public function tokenLogin($key, $token): bool|string
    {
        return base64_decode($key . '-' . $token);
    }
}