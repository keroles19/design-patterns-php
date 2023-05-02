<?php

namespace Composite;

use PHPUnit\Framework\TestCase;
use Structural\Bridge\CarColor\BenzCar;
use Structural\Bridge\CarColor\BlueColor;
use Structural\Bridge\CarColor\BmwCar;
use Structural\Bridge\CarColor\RedColor;
use Structural\Composite\FormRender\Form;
use Structural\Composite\FormRender\InputElement;
use Structural\Composite\FormRender\TextElement;

class CarColorTest extends TestCase
{
    public function testRender()
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());
        $embed = new Form();
        $embed->addElement(new TextElement('Password:'));
        $embed->addElement(new InputElement());
        $form->addElement($embed);

        $this->assertSame(
            '<form>Email:<input type="text" /><form>Password:<input type="text" /></form></form>',
            $form->render()
        );
    }
}