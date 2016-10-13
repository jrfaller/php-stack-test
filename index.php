<?php

/**
 * Index.
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

require_once 'hello.php';

$hello = new Hello('JRe');
echo $hello->helloPage();
