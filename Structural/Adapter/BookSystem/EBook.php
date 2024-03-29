<?php

namespace Structural\Adapter\BookSystem;

interface EBook
{
    public function pressNext();

    public function unlock();

    /**
     * returns current page and total number of pages, like [10, 100] is page 10 of 100
     *
     * @return int[]
     */
    public function getPage(): array;

}