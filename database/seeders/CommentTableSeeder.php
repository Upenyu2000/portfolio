<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //creating datavase for comments
        $a = new Comment;
        $a->name = "Tinashe";
        $a->email = "tin@gmail.com";
        $a->save();
    }
}
