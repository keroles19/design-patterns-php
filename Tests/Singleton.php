<?php


use PHPUnit\Framework\TestCase;

class Singleton extends TestCase
{
  public function test_single_ton_one_instace(){
      $instance_one = \Creational\StaticFactory\Counter::getInstance();
      $instance_two = \Creational\StaticFactory\Counter::getInstance();

      $this->assertEquals($instance_two, $instance_one);
  }

}
