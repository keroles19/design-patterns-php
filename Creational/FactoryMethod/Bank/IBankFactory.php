<?php

namespace Creational\FactoryMethod\Bank;

interface IBankFactory
{
  public function getBank(): IBank;
}