<?php

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\MobileOperators\NotificationFactory;
use Creational\FactoryMethod\MobileOperators\OrangeNotification;
use Creational\FactoryMethod\MobileOperators\VodafoneNotification;
use Creational\FactoryMethod\MobileOperators\WeNotification;
use Exception;
use PHPUnit\Framework\TestCase;

class MobileOperatorsTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function test_can_send_vodafone_message()
    {
        $factory = new NotificationFactory("010");
        $company = $factory->getCompany();
        $this->assertInstanceOf(VodafoneNotification::class, $company);
        $this->assertEquals((new VodafoneNotification())->sendMessage(), $company->sendMessage());

    }


    /**
     * @throws Exception
     */
    public function test_can_send_orange_message()
    {
        $factory = new NotificationFactory("012");
        $company = $factory->getCompany();
        $this->assertInstanceOf(OrangeNotification::class, $company);
        $this->assertEquals((new OrangeNotification())->sendMessage(), $company->sendMessage());

    }

    /**
     * @throws Exception
     */
    public function test_can_send_we_message()
    {
        $factory = new NotificationFactory("015");
        $company = $factory->getCompany();
        $this->assertInstanceOf(WeNotification::class, $company);
        $this->assertEquals((new WeNotification())->sendMessage(), $company->sendMessage());

    }


}