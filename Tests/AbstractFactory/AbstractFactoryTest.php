<?php

namespace AbstractFactory;

use Creational\AbstractFactory\Car\BenzCar;
use Creational\AbstractFactory\Car\BmwCar;
use Creational\AbstractFactory\Car\CarAbstractFactory;
use Creational\AbstractFactory\NotificationSystem\Gmail;
use Creational\AbstractFactory\NotificationSystem\NotificationFactory;
use Creational\AbstractFactory\NotificationSystem\Vodafone;
use Exception;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{

    /**
     * @throws Exception
     */
    public function test_can_notify_using_sms()
    {
        $notificationFactory = new NotificationFactory();
        $sms = $notificationFactory->sendNotification('sms');
        $vodafoneSms = $sms->sendNotification("010");
        $this->assertInstanceOf(Vodafone::class, $vodafoneSms);
    }

    /**
     * @throws Exception
     */
    public function test_can_notify_using_email()
    {
        $notificationFactory = new NotificationFactory();
        $email = $notificationFactory->sendNotification('email');
        $gmail = $email->sendNotification("gmail");
        $this->assertInstanceOf(Gmail::class, $gmail);
    }

}