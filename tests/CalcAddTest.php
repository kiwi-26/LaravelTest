<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Http\Controllers\ArticleController;

class CalcAddTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function setUp() {
        parent::setUp();
        $this->controller = new ArticleController();
    }

    public function testAdditional() {
        // 足した結果を返却
        $this->assertEquals($this->controller->calcAdd(2, 3), 5);

        // 数字のみ
        $this->assertEquals($this->controller->calcAdd('1', '2'), false);
        $this->assertEquals($this->controller->calcAdd(1, '2'), false);
        $this->assertEquals($this->controller->calcAdd('1', 2), false);

        // 小数×
        $this->assertEquals($this->controller->calcAdd(1.1, 2), false);
        $this->assertEquals($this->controller->calcAdd(1.1, 2.5), false);
        $this->assertEquals($this->controller->calcAdd(1.1, 2.5), false);

        // 上限しきい値
        $this->assertEquals($this->controller->calcAdd(998, 1), 999); 
        $this->assertEquals($this->controller->calcAdd(999, 1), 1000); 
        $this->assertEquals($this->controller->calcAdd(1000, 1), false); 
        $this->assertEquals($this->controller->calcAdd(1, 998), 999); 
        $this->assertEquals($this->controller->calcAdd(1, 999), 1000); 
        $this->assertEquals($this->controller->calcAdd(1, 1000), false); 
        $this->assertEquals($this->controller->calcAdd(999, 999), 1998); 
        $this->assertEquals($this->controller->calcAdd(1000, 1000), false); 

        // 下限しきい値
        $this->assertEquals($this->controller->calcAdd(-998, -1), -999); 
        $this->assertEquals($this->controller->calcAdd(-999, -1), -1000); 
        $this->assertEquals($this->controller->calcAdd(-1000, -1), false); 
        $this->assertEquals($this->controller->calcAdd(-1, -998), -999); 
        $this->assertEquals($this->controller->calcAdd(-1, -999), -1000); 
        $this->assertEquals($this->controller->calcAdd(-1, -1000), false); 
        $this->assertEquals($this->controller->calcAdd(-999, -999), -1998); 
        $this->assertEquals($this->controller->calcAdd(-1000, -1000), false); 

        // 結果の上限・下限
        $this->assertEquals($this->controller->calcAdd(999, 1000), false); 
        $this->assertEquals($this->controller->calcAdd(-1000, -999), false); 

        // Are you Happy?
        $this->assertEquals($this->controller->calcAdd(776, 1), 'Happy');
    }

}
