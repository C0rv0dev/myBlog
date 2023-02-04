<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(70)
            ->create()
            ->each(function ($user) {
                if ($user['type'] != User::ADMIN) {
                    $user->comments()->saveMany(
                        Comment::factory()
                            ->count(rand(5, 30))
                            ->make(),
                    );
                }
            });
    }
}
