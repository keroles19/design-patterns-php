<?php

namespace Flyweight;

use PHPUnit\Framework\TestCase;
use Structural\Flyweight\DiscountCalcCheck\DayCheckDiscount;
use Structural\Flyweight\DiscountCalcCheck\ItemCheckDiscount;
use Structural\Flyweight\DiscountCalcCheck\ItemPrice;
use Structural\Proxy\BankAccount\AtmProxy;

class CheckDiscountTest extends TestCase
{
    public function test_can_cache_day_check_discount_object(){
        $item = new ItemPrice();
        $this->assertArrayNotHasKey('day', $item->discountObjects);
        $result = $item->buying('day');
        $this->assertArrayHasKey('day', $item->discountObjects);
        $discountObject = $item->checkDiscount('day');
        $this->assertInstanceOf(DayCheckDiscount::class, $discountObject);
        $this->assertEquals(0.4, $result);
    }

    public function test_can_cache_item_check_discount_object(){
        $item = new ItemPrice();
        $this->assertArrayNotHasKey('item', $item->discountObjects);
        $result = $item->buying('item');
        $this->assertArrayHasKey('item', $item->discountObjects);
        $discountObject = $item->checkDiscount('item');
        $this->assertInstanceOf(ItemCheckDiscount::class, $discountObject);
        $this->assertEquals(0.5, $result);
    }
}