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
        'status' => fake()->randomElement(['normal','flagged','banned']);
		'reports' => fake()->numberBetween(1,400),
		'image' => fake()->randomElement(['https://images-assets.nasa.gov/image/iss073e0080625/iss073e0080625~orig.jpg',
                        'postImages/0f6jr0iOvV0Q9mYoqMCFE4YWmqfdMS0VMj0yD9m2.jpg', 'postImages/oTDCU09zA0WZdThqBsOuRyQLmUUo3hvpkwIM14K6.png', 
                        'postImages/uLPnfhWxDR67ECLYpp38h5TRHpJ48bFddorut31N.jpg','postImages/4UZ0WgMkg2IcnOd8TF3jvkDsJqeHesHGp0oAC2qR.png',
                        'postImages/s4iizuKSJjA1BjrXSzBhyYWqMedDYR1fMb0EhWYl.png','postImages/W0JnGbo2NhiXX8VaWTOV4JVTDMEi1gcbI8VsP7VB.png',
                        'MTRGWOz17OgFzQ4rkO18MywtYlYhOARmCvEfqBeE.png', 'postImages/SHP6fD4x0RhipeIq2MvcKbeKqKbdkAeS70TTONts.png'
        ]),
		
        ];
    }
}
