<?php

namespace Structural\Adapter\ThirdPartyLibs;

use Structural\Adapter\ThirdPartyLibs\TokenAuthLib\TokenAuth\TokenAuthenticator;

class TokenAdapter implements AuthenticatorInterface
{

    public function __construct(protected TokenAuthenticator $authenticator)
    {
    }

    public function login(array $params): bool|string
    {
        return $this->authenticator->tokenLogin($params['key'], $params['token']);
    }
}