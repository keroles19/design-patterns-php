<?php

namespace Structural\Adapter;

class EmailNotification  implements Notification
{
    private $adminEmail;

    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }
    public function send(string $title, string $message)
    {
        return "Sent email with title '$title' to '{$this->adminEmail}' that says '$message'.";
    }
}