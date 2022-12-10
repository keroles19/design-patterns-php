<?php


use Creational\ProtoType\AutomaticCar;
use Creational\ProtoType\ManualCar;
use PHPUnit\Framework\TestCase;

class ProtoTypeTest extends TestCase
{

    public function test_copy_instance(){
        $author  = new \Creational\ProtoType\Author('keroles atef');
        $page =  new \Creational\ProtoType\Page('title one', 'this is body', $author);

        $page->addComment('this is comment from me');

        // copy
        $page_copy = clone $page;


        $this->assertInstanceOf(\Creational\ProtoType\Page::class, $page_copy);

        $this->assertNotEquals($page->getTitle(), $page_copy->getTitle());

        $this->assertEquals($page->getTitle(),'title one');
        $this->assertEquals($page_copy->getTitle(),'Copy of title one');


    }

}
