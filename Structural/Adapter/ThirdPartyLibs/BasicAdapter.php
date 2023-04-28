<?php

namespace Structural\Adapter\ThirdPartyLibs;

use Structural\Adapter\ThirdPartyLibs\BasicAuthLib\BasicAuth\BasicAuthenticator;
use Structural\Adapter\ThirdPartyLibs\TokenAuthLib\TokenAuth\TokenAuthenticator;

class BasicAdapter implements AuthenticatorInterface
{
    public function __construct(protected BasicAuthenticator $authenticator)
    {
    }

    public function login(array $params)
    {
        return $this->authenticator->basicLogin($params['name'], $params['key']);
    }
}