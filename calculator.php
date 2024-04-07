<?php

class Get
{
    private static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public function __wakeup()
    {
        throw new Exception("Cannot unserialize a singleton.");
    }

    public static function ini() {
        $instance = $instance ?? new self();
        return $instance;
    }

    public function __get($name)
    {
        return $_GET[$name] ?? false;
    }
}

$a = Get::ini()->a;
$b = Get::ini()->b;

echo "a + b = ".$a+$b."<br>";
