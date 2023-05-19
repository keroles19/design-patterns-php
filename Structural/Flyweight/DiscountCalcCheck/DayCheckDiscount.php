<?php

namespace Structural\Flyweight\DiscountCalcCheck;

class DayCheckDiscount implements DiscountCheckInterface
{
    public function discount($discount = null): float
    {
        // cal database and make logic check
        return $discount ?? 0.4;

    }
}