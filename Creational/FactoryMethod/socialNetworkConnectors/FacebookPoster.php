<?php

namespace Creational\FactoryMethod\socialNetworkConnectors;

class FacebookPoster extends SocialNetworkPoster
{
    private $email, $pass;

    public function __construct($email, $pass)
    {
        $this->email = $email;
        $this->pass = $pass;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->email, $this->pass);
    }

}