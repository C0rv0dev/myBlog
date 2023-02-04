<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Project;
use Faker\Factory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::factory()
            ->count(20)
            ->create()
            ->each(function ($project) {
                /** @var $project App/Models/Project */
                $project->images()  
                    ->saveMany(Image::factory(6)
                    ->make());
                });
    }
}
