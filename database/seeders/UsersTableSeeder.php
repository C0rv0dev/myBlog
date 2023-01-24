<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        \App\Models\User::factory()->count(70)->create()->each(function($user){
            if($user['type'] != \App\Models\User::ADMIN){
                $user->comments()->saveMany(
                    \App\Models\Comment::factory()->count(rand(5, 30))->make()
                );
            }
        });
    }
}
