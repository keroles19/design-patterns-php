<?php

namespace Creational\ProtoType;

class Author
{
    private $pages = [];

    private $name;


    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addPage(Page $page){
        $this->pages[] = $page;
    }
}