<?php

namespace Creational\FactoryMethod\socialNetworkConnectors;

class LinkedInPoster extends SocialNetworkPoster
{
    private $email, $pass;

    public function __construct($email, $pass)
    {
        $this->email = $email;
        $this->pass = $pass;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->email, $this->pass);
    }

}