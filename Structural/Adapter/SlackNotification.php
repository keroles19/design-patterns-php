<?php

namespace Structural\Adapter;

// * The Adapter is a class that links the Target interface and the Adaptee class.
class SlackNotification  implements Notification
{
    private $slack;
    private $chatId;

    public function __construct(SlackApi $slack, string $chatId)
    {
        $this->slack = $slack;
        $this->chatId = $chatId;
    }

    public function send(string $title, string $message): string
    {
        $slackMessage = "#" . $title . "# " . strip_tags($message);
       $login =  $this->slack->logIn();
       $send_message =   $this->slack->sendMessage($this->chatId, $slackMessage);

       return $login. ' '. $send_message;
    }
}