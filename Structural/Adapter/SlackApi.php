<?php

namespace Structural\Adapter;

class SlackApi
{
    private $login;
    private $apiKey;

    public function __construct(string $login, string $apiKey)
    {
        $this->login = $login;
        $this->apiKey = $apiKey;
    }

    public function logIn(): string
    {
        // Send authentication request to Slack web service.
        return "Logged in to a slack account '{$this->login}'.\n";
    }
    public function sendMessage(string $chatId, string $message): string
    {
        // Send message post request to Slack web service.
        return "Posted following message into the '$chatId' chat: '$message'.\n";
    }

}