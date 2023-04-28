<?php

namespace Structural\Adapter\BookSystem;

interface Book
{
    public function open();

    public function getPage();

    public function turnPage();

}