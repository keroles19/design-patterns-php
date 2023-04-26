<?php

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\socialNetworkConnectors\FacebookConnector;
use Creational\FactoryMethod\socialNetworkConnectors\FacebookPoster;
use Creational\FactoryMethod\socialNetworkConnectors\LinkedInConnector;
use Creational\FactoryMethod\socialNetworkConnectors\LinkedInPoster;
use PHPUnit\Framework\TestCase;

class SocialNetworkTest extends TestCase
{

    public function test_can_make_facebook_poster(){
        $poster = new FacebookPoster('email@email.com', '123456');
        $this->assertInstanceOf(FacebookConnector::class, $poster->getSocialNetwork());

        $posterContent = $poster->post();
        $content =  new FacebookConnector('email@email.com', '123456');
        $this->assertEquals($posterContent, $content->creatPost());

    }


    public function test_can_make_linkedin_poster(){
        $poster = new LinkedInPoster('email@email.com', '123456');
        $this->assertInstanceOf(LinkedInConnector::class, $poster->getSocialNetwork());

        $posterContent = $poster->post();
        $content =  new LinkedInConnector('email@email.com', '123456');
        $this->assertEquals($posterContent, $content->creatPost());

    }

}