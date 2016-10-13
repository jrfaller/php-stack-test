<?php

class Hello {
    var $name;

    function say_hello() {
        return "Hello " . $this->name . "!";
    }

    function Hello($name) {
        $this->name = $name;
    }
}
