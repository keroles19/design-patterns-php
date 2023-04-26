<?php

namespace Creational\Builder\HouseBuilder;

interface HouseBuilder
{
   public function createHouse();

   public function buildStepOne();

   public function buildStepTwo();

   public function buildStepTree();

   public function finishHouse();
}