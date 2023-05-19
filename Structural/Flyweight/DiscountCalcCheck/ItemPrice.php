<?php

namespace Structural\Flyweight\DiscountCalcCheck;

class ItemPrice
{
    public array $discountObjects = [];


    /**
     * @param $type
     * @return mixed
     */
    public function buying($type): mixed
    {
        $result = $this->checkDiscount($type);
        return $result->discount();
    }


    /**
     * @param $type
     * @return DiscountCheckInterface
     */
    public function checkDiscount($type): DiscountCheckInterface
    {
        if (array_key_exists($type, $this->discountObjects)) {
            return $this->discountObjects[$type];
        } else {
            $object = match ($type) {
                'day' => new DayCheckDiscount(),
                'item' => new ItemCheckDiscount(),
            };

            $this->discountObjects[$type] = $object; // cache
            return $object;
        }

    }
}