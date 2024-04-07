<?php

class Post
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
        return $_POST[$name] ?? false;
    }
}

$option = Post::ini()->fav_pet;
echo "User choose $option as favourite pet";

//var_dump($_REQUEST);
