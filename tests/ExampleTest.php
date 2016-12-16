<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel');
    }
/*
    public function testArticleLink()
    {
        $this
            ->visit('/')
            ->click('Articles')
            ->see('Article')
            ->dontsee('Error')
            ->dontsee('Fatal')
            ->dontsee('Warning');
    }
*/
}
