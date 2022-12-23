<?php

use PHPUnit\Framework\TestCase;
use Structural\Decorator\Client;
use Structural\Proxy\Proxy;
use Structural\Proxy\RealSubject;

class DecoratorTest extends TestCase
{

    public function test_send_message_by_sms_and_facebook_pattern(){
      $client = new Client();
      $result = $client->faceAndSms();

      $this->assertEquals('Facebook Service -->HELLO SIR Sms Service -->HELLO SIR ', $result);
    }

    public function test_send_message_by_sms_and_slack_pattern(){
        $client = new Client();
        $result = $client->slackAndSms();

        $this->assertEquals('Slack Service -->HELLO SIR Sms Service -->HELLO SIR ', $result);
    }


}