<?php

/**
 * Hello class file.
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


require_once 'vendor/autoload.php';
Twig_Autoloader::register();

/**
 * Hello class.
 *
 * @category  PHP
 * @package   Hello
 * @author    Jean-Rémy Falleri <jr.falleri@gmail.com>
 * @copyright 2016 Jean-Rémy Falleri
 * @license   BSD License
 * @link      https://github.com/jrfaller/php-stack-test
 */
class Hello
{
    var $name;
    var $twig;

    /**
     * SayHello method.
     *
     * @return String
     */
    function sayHello()
    {
        return "Hello " . $this->name . "!";
    }

    /**
     * HelloPage method.
     *
     * @return String
     */
    function helloPage()
    {
        $template = $this->twig->loadTemplate('hello.tpl');
        return $template->render(array('hello' => $this->say_hello()));
    }

    /**
     * Constructor.
     *
     * @param String $name the name
     *
     * @return Hello
     */
    function __construct($name)
    {
        $this->name = $name;
        $this->twig = new Twig_Environment(
            new Twig_Loader_Filesystem('.'), array('cache' => '.')
        );
    }
}
