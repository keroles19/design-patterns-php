<?php

namespace Structural;

class RealSubject implements SubjectInterface
{
    public function request(): string
    {
        return "RealSubject: Handling request";
    }

}