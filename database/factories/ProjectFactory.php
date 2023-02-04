<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->jobTitle(),
            'description'=>fake()->text(160),
            'content'=>fake()->paragraphs(33, true),
            'company_name'=>fake()->company(),
            'company_url'=>"https://".fake()->domainName(),
            'status'=>fake()->randomElement([true, false])
        ];
    }
}
