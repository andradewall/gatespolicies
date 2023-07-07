<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'title' => 'Mr.',
        ]);

        User::factory()->create([
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com',
            'title' => 'Ms.'
        ]);

        Post::query()->create([
            'body' => 'I wanna go to the beach today!',
            'user_id' => 1,
        ]);
        Post::query()->create([
            'body' => 'Im feeling good today!',
            'user_id' => 1,
        ]);
        Post::query()->create([
            'body' => 'I have to go to the gym today!',
            'user_id' => 2,
        ]);
    }
}
