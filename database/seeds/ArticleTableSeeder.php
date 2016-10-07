<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate();
        DB::table('articles')->insert([
            [
                'title' => 'Test Article 1',
                'summary' => 'Test Article1 Summary',
                'content' => 'Test Article1 Content. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ...',
                'user_id' => 1,
                'status' => 0,
                'is_deleted' => false
            ],
            [
                'title' => 'Test Article 2',
                'summary' => 'Test Article2 Summary',
                'content' => 'Test Article2 Content. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ...',
                'user_id' => 2,
                'status' => 0,
                'is_deleted' => false
            ]
        ]);
    }
}
