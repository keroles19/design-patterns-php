<?php

namespace Structural\Proxy;

class RealSubject implements SubjectInterface
{
    public function request(): string
    {
        return "RealSubject: Handling request";
    }

}