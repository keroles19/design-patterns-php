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
use Structural\DataMapper\ORM\DataMapper;
use Structural\DataMapper\ORM\Storage;
use Structural\DataMapper\ORM\User;

class OrmTest extends TestCase
{
    private Storage $manager;

    private array $data;

    protected function setUp(): void
    {
        parent::setUp();
        $this->data = [1 => ['email' => 'kerolesatef200@gmail.com', 'pass' => '1234']];
        $this->manager = new Storage($this->data);
    }


    public function test_can_use_using_id()
    {
        $mapper = new DataMapper($this->manager);
        $user = $mapper->findById(1);
        $this->assertEquals($this->data[1], $user);
    }

    public function test_can_save_new_user()
    {
        $user = new User();
        $user->setEmail('emial@gmail.com');
        $user->setPass('1234');
        $user->setId(2);

        $mapper = new DataMapper($this->manager);
        $result = $mapper->saveUser($user);
        $this->assertTrue($result);
    }
}