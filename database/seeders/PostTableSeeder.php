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
        $post->name = "Author";
        $post->email = "a.tar@gmail.com";
        $post->description = "What good anime can you recommend?";
        $post->save();
        $post = Post::factory()->count(50)->create();
    }
}
