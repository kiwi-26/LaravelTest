<?php

namespace App;

use App\Monster;

class Chimera extends Monster
{
    function __construct($name) {
        $this->hp = 120;
        $this->atk = 15;
        $this->name = $name;
    }

    function attack() {
        return "Chimera $this->name pounce on Hero!!";
    }
}
