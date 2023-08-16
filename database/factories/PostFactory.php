<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->unique()->sentence(),
            'slug' => Str::slug(fake()->unique()->sentence()),
            'image' => "storage/post/placeholder.jpg",//fake()->filePath(),
            'description' => fake()->text(),
            'category_id' => rand(1,10),
            'user_id' => 1,
            'published_at' => today()
        ];
    }
}
