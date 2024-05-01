<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Post;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //creating datavase for comments
        $comment = new Comment;
        $comment->post_id=1;
        $comment->username = "Tin53943";
        $comment->title = "Anime recommendation";
        $comment->description = "Attack on titan is a good watch.";
        $comment->save();
    
        $comment = Comment::factory()->count(50)->create();

    }
}
