<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blogs>
 */
class BlogsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'content' => fake()->paragraphs(5, true),
            'category' => fake()->word(),
            //'author_id' => \App\Models\User::factory(),
            'header_image' => fake()->imageUrl(800, 400, 'nature', true, 'Blog Header'),
            'created_at' => now(),
            'updated_at' => now(),
            
        ];
    }
}
