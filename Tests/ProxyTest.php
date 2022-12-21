<?php

use Creational\Builder\BenzBuilder;
use Creational\Builder\BmwBuilder;
use Creational\Builder\Modules\BenzCar;
use Creational\Builder\Modules\BmwCar;
use Creational\Builder\ProduceBuilder;
use PHPUnit\Framework\TestCase;
use Structural\Proxy;
use Structural\RealSubject;

class ProxyTest extends TestCase
{

    public function test_proxy_pattern(){
        $realSubject = new RealSubject();

        $proxy = new Proxy($realSubject);

       $result =  $proxy->request();

        $this->assertEquals('RealSubject: Handling request', $result);

    }


}