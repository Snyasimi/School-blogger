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
            'lastname' => fake()->name(),	    
            'username' => fake()->username(),	    
            'campus' =>fake()->randomElement(['Nairobi Campus','Thika Campus','Mombasa Campus']),	    
            'email' => fake()->unique()->safeEmail(),	    
            'phone_number' =>fake()->phoneNumber(),       
            'account_status' => fake()->randomElement(['active','flagged','banned']);                
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
