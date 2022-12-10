<?php

namespace Creational\ProtoType;

class Page
{
    private $title;
    private $body;

    private $author;

    private $comments = [];

    public function setTitle(string $title){
        $this->$title = $title;
    }

    public function getTitle(){
        return $this->title;
    }
    public function __construct(string $title, string $body, Author $author)
    {
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;
        $this->author->addPage($this);


    }

    public function addComment(string $comment): void
    {
        $this->comments[] = $comment;
    }

    public function __clone(){
        // add every thing need  copy from this instance
        $this->title = "Copy of " . $this->title;
        $this->author->addPage($this);
        $this->comments = [];
    }

}