<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\{User,Posts,Comments,Bookmarks};



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
	    /* User::factory(10)->create();
	    Posts::factory(10)->create();
	    Comments::factory(5)->create();
	    Bookmarks::factory(10)->create();
	     */
	    User::factory()->has(Posts::factory(1)->has(Comments::factory(2)))->has(Bookmarks::factory(4))->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
