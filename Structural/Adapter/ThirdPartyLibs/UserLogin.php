<?php

namespace Structural\Adapter\ThirdPartyLibs;

use Structural\Adapter\ThirdPartyLibs\BasicAuthLib\BasicAuth\BasicAuthenticator;

class UserLogin
{
    public function __construct(protected AuthenticatorInterface $authenticator)
    {
    }

    public function login(array $params): string
    {
        return $this->authenticator->login($params);
    }


}