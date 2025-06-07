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
		'user_id' => \App\Models\User::factory(),
		'post_id' => \App\Models\Posts::factory(),
		'content' => fake()->text(20),
		
		
        ];
    }
}
