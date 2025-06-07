<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
		'author_id' => \App\Models\User::factory(),
		'title' => fake()->title(),
		'content' => fake()->text(200),
		'likes' => fake()->numberBetween(5,200),
		'reports' => fake()->numberBetween(1,400),
		'image' => fake()->randomElement(['https://images-assets.nasa.gov/image/iss073e0080625/iss073e0080625~orig.jpg','https://images-assets.nasa.gov/image/iss073e0080327/iss073e0080327~orig.jpg','https://images-assets.nasa.gov/image/iss073e0080625/iss073e0080625~orig.jpg']),
		
        ];
    }
}
