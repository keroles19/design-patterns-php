<?php

namespace Structural\Proxy\HandlingRequest;

class RealSubject implements SubjectInterface
{
    public function request(): string
    {
        return "RealSubject: Handling request";
    }

}