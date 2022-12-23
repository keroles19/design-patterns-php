<?php

namespace Structural\Decorator;

class Client
{
    public $msg = 'HELLO SIR ',
           $modifier;
    public function __construct()
    {
        $this->modifier = new FireMessage();
    }

    // need to send message as sms and facebook
    function faceAndSms(){
        $face = new FacebookDecorator($this->modifier);
        $sms = new SmsDecorator($this->modifier);
        $result = $face->sendMessage($this->msg);
        $result.= $sms->sendMessage($this->msg);

        return $result; //  Facebook Service -->HELLO SIR  Sms Service -->HELLO SIR

    }

    function slackAndSms(){
        $slack = new SlackDecorator($this->modifier);
        $sms = new SmsDecorator($this->modifier);
        $result = $slack->sendMessage($this->msg);
        $result.= $sms->sendMessage($this->msg);

        return $result; //  Slack Service -->HELLO SIR  Sms Service -->HELLO SIR

    }

}