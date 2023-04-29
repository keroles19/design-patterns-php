<?php

namespace Bridge;

use PHPUnit\Framework\TestCase;
use Structural\Bridge\CarColor\BenzCar;
use Structural\Bridge\CarColor\BlueColor;
use Structural\Bridge\CarColor\BmwCar;
use Structural\Bridge\CarColor\RedColor;
use Structural\Bridge\DrawerShape\CircleDrawer;
use Structural\Bridge\DrawerShape\Mac;
use Structural\Bridge\DrawerShape\SquareDrawer;
use Structural\Bridge\DrawerShape\Windows;

class DrawerShapeTest extends TestCase
{
   public function test_can_produce_windows_circle(){
       $op = new Windows();
       $shape = new CircleDrawer($op);
       $this->assertEquals('windows circle', $shape->draw());
   }

    public function test_can_produce_windows_square(){
        $op = new Windows();
        $shape = new SquareDrawer($op);
        $this->assertEquals('windows square', $shape->draw());
    }


    public function test_can_produce_mac_circle(){
        $op = new Mac();
        $shape = new CircleDrawer($op);
        $this->assertEquals('Mac circle', $shape->draw());
    }

    public function test_can_produce_mac_square(){
        $op = new Mac();
        $shape = new SquareDrawer($op);
        $this->assertEquals('Mac square', $shape->draw());
    }
}