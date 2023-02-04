<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(10)
        ->create()
        ->each(function ($category)
        {
            /** @var $category App/Models/Category */
            $category
            ->posts()
            ->saveMany(
                Post::factory(5)
                ->create()
                ->each(function ($post)
                {
                    /** @var $post App/Models/Post */
                    $post->images()->saveMany(
                        Image::factory(3)
                        ->make()
                    );
                })
            );        
        });
    }
}
