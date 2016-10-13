<?php

/**
 * Test hello class file.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   Hello
 * @author    Jean-Rémy Falleri <jr.falleri@gmail.com>
 * @copyright 2016 Jean-Rémy Falleri
 * @license   BSD License
 * @link      https://github.com/jrfaller/php-stack-test
 */

require 'hello.php';
require 'vendor/autoload.php';

/**
 * Test hello class.
 *
 * @category  PHP
 * @package   Hello
 * @author    Jean-Rémy Falleri <jr.falleri@gmail.com>
 * @copyright 2016 Jean-Rémy Falleri
 * @license   BSD License
 * @link      https://github.com/jrfaller/php-stack-test
 */
class HelloTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test sayHello method.
     *
     * @return void
     */
    public function testSayHello()
    {
        $h = new Hello('JRe');
        $this->assertEquals("Hello JRe!", $h->sayHello());
    }

    /**
     * Test helloPage method.
     *
     * @return void
     */
    public function testHelloPage()
    {
        $h = new Hello('JRe');
        $p = $h->helloPage();
        $this->assertContains('Hello JRe!', $p);
        $this->assertContains('<html>', $p);
    }
}
