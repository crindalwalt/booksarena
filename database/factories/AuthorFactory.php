<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'excerpt' => $this->faker->sentence(10),
            'description' => $this->faker->paragraph(5),
            'avatar' => 'https://avatar.iran.liara.run/public',
            'born' => $this->faker->dateTimeBetween('-80 years', '-20 years'),
            'nationality' => $this->faker->country(),
            'genre' => $this->faker->word(),
        ];
    }
}

