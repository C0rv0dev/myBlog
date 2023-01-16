<?php

namespace Database\Seeders;

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
        \Illuminate\Support\Facades\DB::table('categories')
            ->insert([

                [
                    'name' => 'Filmes',
                    'slug' => \Illuminate\Support\Str::slug('Filmes'),
                    'description' => 'Filmes e tudo mais',
                    'status' => false
                ],

                [
                    'name' => 'Jogos',
                    'slug' => \Illuminate\Support\Str::slug('Jogos'),
                    'description' => 'Jogos e tudo mais',
                    'status' => false
                ]

            ]);
    }
}
