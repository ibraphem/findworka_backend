<?php

use Illuminate\Database\Seeder;
use App\Comment;


class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $comments = factory(App\Comment::class, 1000)->create();
    }
}
