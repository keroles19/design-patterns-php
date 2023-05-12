<?php

namespace Decorator;

use PHPUnit\Framework\TestCase;
use Structural\Decorator\smsDecorator\Client;

class SmsDecoratorTest extends TestCase
{

    public function test_send_message_by_sms_and_facebook_pattern()
    {
        $client = new Client();
        $result = $client->faceAndSms();

        $this->assertEquals('Facebook Service -->HELLO SIR Sms Service -->HELLO SIR ', $result);
    }

    public function test_send_message_by_sms_and_slack_pattern()
    {
        $client = new Client();
        $result = $client->slackAndSms();

        $this->assertEquals('Slack Service -->HELLO SIR Sms Service -->HELLO SIR ', $result);
    }


}