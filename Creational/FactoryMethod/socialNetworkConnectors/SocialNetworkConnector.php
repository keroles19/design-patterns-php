<?php

namespace Creational\FactoryMethod\socialNetworkConnectors;

/**
 * Connector Factory
 */

interface SocialNetworkConnector
{

    public function login();

    public function logout();

    public function creatPost();
}