<?php

namespace Creational\FactoryMethod\socialNetworkConnectors;

class LinkedInConnector implements SocialNetworkConnector
{
    private $email, $pass;

    public function __construct($email, $pass)
    {
        $this->email = $email;
        $this->pass = $pass;
    }

    public function login(): string
    {
        return "Send HTTP API request to log in user $this->email with " . "password $this->pass";
    }

    public function creatPost(): string
    {
        return "Send HTTP API requests to create a post in LinkedIn timeline.";

    }

    public function logout(): string
    {
        return "Send HTTP API request to log out user $this->email";
    }
}