<?php

use PHPUnit\Framework\TestCase;
use Structural\Proxy\Proxy;
use Structural\Proxy\RealSubject;

class ProxyTest extends TestCase
{

    public function test_proxy_pattern(){
        $realSubject = new RealSubject();

        $proxy = new Proxy($realSubject);

       $result =  $proxy->request();

        $this->assertEquals('RealSubject: Handling request', $result);

    }


}