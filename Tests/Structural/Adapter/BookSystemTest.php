<?php

use PHPUnit\Framework\TestCase;
use Structural\Adapter\BookSystem\EBookAdapter;
use Structural\Adapter\BookSystem\KindleBook;
use Structural\Adapter\BookSystem\PaperBook;
use Structural\Decorator\Client;

class BookSystemTest extends TestCase
{
    public function test_can_turn_page_on_book(){
        $book = new PaperBook();
        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }

    public function test_can_turn_page_on_kindle_like_as_normal_boo(){
        $kindle = new KindleBook();
        $eBookAdapter = new EBookAdapter($kindle);

        $eBookAdapter->open();
        $eBookAdapter->turnPage();
        $this->assertSame(2, $eBookAdapter->getPage());

    }
}