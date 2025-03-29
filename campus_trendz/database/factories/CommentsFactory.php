<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comments>
 */
class CommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            //'blog_id' => \App\Models\Blogs::factory(),
            //'user_id' => \App\Models\User::factory(),
            'content' => fake()->sentence(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
