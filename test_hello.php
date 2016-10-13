<?php

require 'hello.php';
require 'vendor/autoload.php';

class HelloTest extends PHPUnit_Framework_TestCase
{
    public function testSayHello()
    {
        $h = new Hello('JRe');
        $this->assertEquals("Hello JRe!", $h->say_hello());
    }

    public function testHelloPage() {
        $h = new Hello('JRe');
        $p = $h->hello_page();
        $this->assertContains('Hello JRe!', $p);
        $this->assertContains('<html>', $p);
    }
}

