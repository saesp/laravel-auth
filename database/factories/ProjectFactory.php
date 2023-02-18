<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->words(random_int(2, 4), true),
            'description' => fake()->boolean() ? fake()->text() : null,
            'languages' => fake()->words(random_int(2, 8), true),
            // 'main_image' => fake()->boolean() ? fake()->imageUrl() : null,
            'repo_link' => fake()->url(),
            'view_link' => fake()->boolean() ? fake()->url() : null,
            'completed' => fake()->boolean(),
            // 'completed' => fake()->randomElement(['yes', 'no']),
            'release_date' => fake()->dateTimeBetween('-5 months', 'now', null),
        ];
    }
}