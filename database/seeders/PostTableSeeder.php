<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creating data for Posts
        $post = new Post;
        $post->username = "Auth543";
        $post->title = "Gimme a good movie";
        $post->description = "Batman is a good watch";
        $post->save();
        $post = Post::factory()->count(50)->create();
    }
}
