<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'stars' => fake()->numberBetween(1, 5),
            'content' => fake() -> paragraphs(4, true),
            'item_type' => 'App\Models\Post',
            'item_id' => fake()->numberBetween(1, 70),
            // 'user_id' => fake()->numberBetween(1, 70),
             'status' => fake()->randomElement([true, false])
        ];
    }
}
