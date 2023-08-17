<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->email(),
            'phone' => fake()->phoneNumber(),
            'facebook' => fake()->url(),
            'twitter' => fake()->url(),
            'instagram' => fake()->url(),
            'linkedin' => fake()->url(),
            'brief_bio' => fake()->text(300),
            'bio' => fake()->text(),
            'membership_type' => fake()->randomElement(['Member', 'Governing Body Member']),
            'role' => fake()->randomElement(['General Member', 'Working member'])
        ];
    }
}
