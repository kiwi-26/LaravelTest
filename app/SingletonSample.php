<?php

namespace App;

class SingletonSample
{
    private $id;

    private static $instance;

    private function __construct() {
        $this->id = uniqid();
    }

    public static function sharedInstance() {
        if (!isset( self::$instance )) {
            self::$instance = new SingletonSample();
            $id = self::$instance->id;
            echo "Singleton Class Created! ID: $id";
        }
        return self::$instance;
    }

    function getId () {
        return $this->id;
    }
}
