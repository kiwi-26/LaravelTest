<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

// abstract class Monster extends Model
abstract class Monster
{
    protected $hp;
    protected $atk;
    protected $name;
    abstract function attack();
}
