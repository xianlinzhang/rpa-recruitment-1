<?php
namespace MyGreeter;

// 在phpunit 测试时显示下行代码，为了加载 \MyGreeter\Client()
// require_once dirname(dirname(dirname(__FILE__))).'/vendor/autoload.php';

class Test extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->greeter = new \MyGreeter\Client();
    }

    public function testInstance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }

    public function testgetGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
    }
}
