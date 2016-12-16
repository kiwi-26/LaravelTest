<?php

namespace App\Http\Controllers;

use App\Slime;
use App\Chimera;
use App\SingletonSample;

class HelloController extends Controller
{
    public function index() {
        $attackLog = array();

        $slimea = Slime::sharedInstance();
        $slimeb = Slime::sharedInstance();
        $chimera = new Chimera('A');
        $attackLog[] = $slimea->attack();
        $attackLog[] = $slimeb->attack();
        $attackLog[] = $chimera->attack();
        $attackLog[] = $slimea->attack();
        $attackLog[] = $slimea->attack();

        return view('hello.index', ['logs' => $attackLog]);
    }
}
