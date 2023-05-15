<?php

namespace Proxy;

use PHPUnit\Framework\TestCase;
use Structural\Proxy\HandlingRequest\Proxy;
use Structural\Proxy\HandlingRequest\RealSubject;

class HandlingRequestTest extends TestCase
{

    public function test_proxy_pattern()
    {
        $realSubject = new RealSubject();

        $proxy = new Proxy($realSubject);

        $result = $proxy->request();

        $this->assertEquals('RealSubject: Handling request', $result);

    }


}