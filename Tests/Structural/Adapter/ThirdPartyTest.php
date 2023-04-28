<?php

use PHPUnit\Framework\TestCase;
use Structural\Adapter\ThirdPartyLibs\BasicAdapter;
use Structural\Adapter\ThirdPartyLibs\TokenAdapter;
use Structural\Adapter\ThirdPartyLibs\UserLogin;

class ThirdPartyTest extends TestCase
{
    public function test_can_login_using_basic_auth()
    {
        $basicMock = $this->createMock(BasicAdapter::class);
        $basicMock->expects($this->once())
            ->method('login')->willReturn('keroles-1234');
        $user = new UserLogin($basicMock);
       $result =  $user->login(['name' => 'keroles', 'pass' => '1234']);
       $this->assertEquals('keroles-1234', $result);
    }

    public function test_can_login_using_token_auth()
    {
        $basicMock = $this->createMock(TokenAdapter::class);
        $basicMock->expects($this->once())
            ->method('login')->willReturn(base64_decode('test-test'));
        $user = new UserLogin($basicMock);
        $result =  $user->login(['key' => 'test', 'pass' => 'test']);
        $this->assertEquals(base64_decode('test-test'), $result);
    }
}