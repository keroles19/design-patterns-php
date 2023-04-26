<?php

namespace Creational\SimpleFactory\Bank;

interface IBankFactory
{
  public function getBank(): IBank;
}