<?php

namespace Creational\FactoryMethodExampleTwo;

interface IBankFactory
{
  public function getBank(): IBank;
}