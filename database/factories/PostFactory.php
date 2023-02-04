<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->words(4, true),
            'description'=>fake()->text(160),
            'content'=>fake()->paragraphs(20, true),
            'status'=>fake()->randomElement([true, false])
        ];
    }
}
