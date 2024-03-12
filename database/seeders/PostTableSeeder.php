<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creating data for Posts
        $a = new Post;
        $a->name = "Author";
        $a->email = "a.tar@gmail.com";
        $a->save();
    }
}
