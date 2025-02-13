<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Mail\SentMessage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(rand(1, 3), false),
            'slug' => Str::slug(fake()->sentence(rand(1, 3), false)),
        ];
    }
}
