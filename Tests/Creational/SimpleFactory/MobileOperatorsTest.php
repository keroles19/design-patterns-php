<?php

namespace Creational\SimpleFactory;

use Creational\SimpleFactory\MobileOperators\NotificationFactory;
use Creational\SimpleFactory\MobileOperators\OrangeNotification;
use Creational\SimpleFactory\MobileOperators\VodafoneNotification;
use Creational\SimpleFactory\MobileOperators\WeNotification;
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