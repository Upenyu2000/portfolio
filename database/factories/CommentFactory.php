<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //fake random data for comments
            'username' => fake()->unique()->userName(),
            'post_id'=> fake()->numberBetween(1,50),
            'title' => fake()->text(),
            'description'=> fake()->text(),
        ];
    }
}
