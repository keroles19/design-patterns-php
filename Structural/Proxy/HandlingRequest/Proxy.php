<?php

namespace Structural\Proxy\HandlingRequest;

class Proxy implements SubjectInterface
{
    private $realSubject;

    public function __construct(RealSubject $realSubject)
    {
        $this->realSubject = $realSubject;
    }

    public function request()
    {
        if ($this->checkAccess()) {
          $result  = $this->realSubject->request();
            $this->logAccess();

            return $result;
        }
        return false;

    }

    private function checkAccess(): bool
    {
        // Some real checks should go here.
        echo "Proxy: Checking access prior to firing a real request.\n";

        return true;
    }

    private function logAccess(): void
    {
        echo "Proxy: Logging the time of request.\n";
    }

}