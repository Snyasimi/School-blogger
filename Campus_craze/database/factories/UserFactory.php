<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [           
            'firstname' => fake()->name(),	
            'profile_picture' =>    fake()->randomElement(['https://images-assets.nasa.gov/image/iss073e0080625/iss073e0080625~orig.jpg',
                
                                                            'postImages/0f6jr0iOvV0Q9mYoqMCFE4YWmqfdMS0VMj0yD9m2.jpg', 'postImages/oTDCU09zA0WZdThqBsOuRyQLmUUo3hvpkwIM14K6.png', 
                                                            'postImages/uLPnfhWxDR67ECLYpp38h5TRHpJ48bFddorut31N.jpg','postImages/4UZ0WgMkg2IcnOd8TF3jvkDsJqeHesHGp0oAC2qR.png',
                                                            'postImages/s4iizuKSJjA1BjrXSzBhyYWqMedDYR1fMb0EhWYl.png','postImages/W0JnGbo2NhiXX8VaWTOV4JVTDMEi1gcbI8VsP7VB.png',
                                                            'MTRGWOz17OgFzQ4rkO18MywtYlYhOARmCvEfqBeE.png', 'postImages/SHP6fD4x0RhipeIq2MvcKbeKqKbdkAeS70TTONts.png'
                                                        ]),  
            'lastname' => fake()->name(),	    
            'username' => fake()->username(),	    
            'campus' =>fake()->randomElement(['Nairobi Campus','Thika Campus','Mombasa Campus']),

            'email' => fake()->unique()->safeEmail(),	    
            'phone_number' =>fake()->phoneNumber(),       
            'account_status' => fake()->randomElement(['active','flagged','banned']),              
            'email_verified_at' => now(),                 
            'password' => Hash::make('password'),                  
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
