<?php

require_once 'vendor/autoload.php';
Twig_Autoloader::register();

class Hello {
    var $name;
    var $twig;

    function say_hello() {
        return "Hello " . $this->name . "!";
    }

    function hello_page() {
        $template = $this->twig->loadTemplate('hello.tpl');
        return $template->render(array('hello' => $this->say_hello()));
    }

    function Hello($name) {
        $this->name = $name;
        $this->twig = new Twig_Environment(new Twig_Loader_Filesystem('.'), array('cache' => '.'));
    }
}
