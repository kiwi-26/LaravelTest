<?php

namespace App;

use App\Monster;

class Slime extends Monster
{
    private static $instance;

    private function __construct($name) {
        $this->hp = 100;
        $this->atk = 10;
        $this->name = $name;
    }

    public static function sharedInstance() {
        if (!isset( self::$instance )) {
            self::$instance = new Slime('A');
        }
        return self::$instance;
    }

    function attack() {
        return "Slime $this->name attacks Hero!!";
    }
}
