<?php

namespace Database\Seeders;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Post::truncate();
        // Category::truncate();

        // $user = User::factory()->create ([
        //     'name' => 'John Doew'
        // ]);

        Post::factory(15)->create();
        User::factory(10)->create();

    }
}