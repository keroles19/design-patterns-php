<?php

namespace Creational\FactoryMethod\socialNetworkConnectors;

abstract class  SocialNetworkPoster
{
    /**
     * The actual factory method. Note that it returns the abstract connector.
     * This lets subclasses return any concrete connectors without breaking the
     * superclass' contract.
     */
    abstract public function getSocialNetwork(): SocialNetworkConnector;

    public function post($content)
    {
        $social = $this->getSocialNetwork();
        $social->login();
        return  $social->creatPost($content);
    }
}