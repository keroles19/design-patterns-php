<?php

use Creational\FactoryMethod\socialNetworkConnectors\FacebookPoster;
use PHPUnit\Framework\TestCase;

class SocialNetworkTest extends TestCase
{
    public function test_can_make_facebook_post(){
        $social = new FacebookPoster('test@test.com','1234456');
        $result =  $social->post('facebook post');
        $this->assertEquals($result,
        'Send HTTP API requests to create a post in Facebook timeline'
        );

    }

    public function test_can_make_linkedin_post(){
        $social = new FacebookPoster('test@test.com','1234456');
        $result =  $social->post('linkedin post');
        $this->assertEquals($result,
        'Send HTTP API requests to create a post in LinkedIn timeline'
        );

    }
}