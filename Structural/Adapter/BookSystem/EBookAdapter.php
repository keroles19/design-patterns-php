<?php

namespace Structural\Adapter\BookSystem;

class EBookAdapter implements Book
{
    public function __construct(protected EBook $eBook)
    {
    }

    public function open()
    {
        return $this->eBook->unlock();
    }

    public function getPage() : int
    {
        return $this->eBook->getPage()[0];
    }

    public function turnPage()
    {
       return $this->eBook->pressNext();
    }
}