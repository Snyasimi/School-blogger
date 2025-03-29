<?php

namespace Database\Seeders;
use App\Models\{User,Authors,Blogs};
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


    User::factory()
        ->count(10)
        ->has(Authors::factory()
        ->count(1)
        ->has(Blogs::factory()->count(20))
    )
    ->create();

    }
}
